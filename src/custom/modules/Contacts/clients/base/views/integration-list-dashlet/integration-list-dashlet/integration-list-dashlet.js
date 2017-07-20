
// Enrico Simonetti
// enricosimonetti.com
//
// 2017-07-20 on Sugar 7.9.0.0
// filename: custom/modules/Contacts/clients/base/views/integration-list-dashlet/integration-list-dashlet.js 

({
    plugins: ['Dashlet'],

    initialize: function(options) {
        this._super('initialize', [options]);
    },

    initDashlet: function(view) {
        var self = this;

        if (this.settings.get('api_type') == '') {
            this.settings.set({'api_type': 'list'});
        }

        this.settings.on('change:api_type', this.loadData, this);
    },

    loadData: function(options) {
        if(_.isUndefined(this.model)) {
            return;
        }

        var self = this;
        var record_id = this.model.get('id');

        app.api.call('READ', app.api.buildURL('Contacts/' + record_id + '/integration/' + this.settings.get('api_type')), null, {
            success: function(data) {
                if(self.disposed) {
                    return;
                }

                if(_.isEmpty(data)) {
                    self.errorThrown = true;
                }

                self.response = data;
                self.render();
            },
            error: function(error) {
                app.alert.show("server-error", {
                    level: 'error',
                    messages: 'ERR_GENERIC_SERVER_ERROR',
                    autoClose: false
                });
                app.error.handleHttpError(error);
            },
            complete: options ? options.complete : null
        });
    },

    _dispose: function() {
        this.settings.off('change:api_type');
        this._super('_dispose');
    }
})
