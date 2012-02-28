// var campaign = {
//     title: "here"

// }

// {
//     xtype: 'cmx-panel-campaignform'
//     ,record: campaign || {}
// }


/**
 * Loads the Template panel
 * 
 * @class MODx.panel.CampaignForm
 * @extends MODx.FormPanel
 * @param {Object} config An object of configuration properties
 * @xtype modx-panel-template
 */

cmx.panel.CampaignForm = function(config) {
    config = config || {record:{}};
    config.record = config.record || {};
    Ext.applyIf(config,{
        url: cmx.config.connector_url
        ,baseParams: {
            action: 'mgr/campaign_form/save'
            ,id: (config.record) ? config.record.id : 0
        }
        ,id: 'cmx-panel-edit'
        ,cls: 'container form-with-labels'
        ,bodyStyle: ''
        ,items: [{
            html: '<h2>'+_('cmx.new_campaign')+'</h2>'
            ,id: 'modx-template-header'
            ,cls: 'modx-page-header'
            ,border: false
        },MODx.getPageStructure([{
            title: _('cmx.campaign')
            ,itemId: 'form-campaign'
            ,defaults: { border: false ,msgTarget: 'side' }
            ,layout: 'form'
            ,id: 'modx-template-form'
            ,labelWidth: 150
            ,items: [{
                html: '<p>'+_('cmx.campaign_intro')+'</p>'
                ,id: 'modx-template-msg'
                ,bodyCssClass: 'panel-desc'
            },{
                layout: 'column'
                ,border: false
                ,defaults: {
                    layout: 'form'
                    ,labelAlign: 'top'
                    ,anchor: '100%'
                    ,border: false
                    ,cls:'main-wrapper'
                    ,labelSeparator: ''
                }
                ,items: [{
                    columnWidth: 1
                    ,items: [{
                        xtype: 'textfield',
                        name: 'name',
                        fieldLabel: _('cmx.campaign_name_label'),
                        width: 500,
                        allowBlank: false
                    }
                    ,{
                        xtype: 'textfield',
                        name: 'subject',
                        fieldLabel: _('cmx.campaign_subject_label'),
                        width: 500,
                        allowBlank: false
                    }
                    ,{
                        xtype: 'textfield',
                        name: 'from_name',
                        fieldLabel: _('cmx.campaign_from_name_label'),
                        width: 500,
                        allowBlank: false
                    }
                    ,{
                        xtype: 'textfield',
                        name: 'from_email',
                        fieldLabel: _('cmx.campaign_from_email_label'),
                        width: 500,
                        allowBlank: false
                    }
                    ,{
                        xtype: 'textfield',
                        name: 'replyto',
                        fieldLabel: _('cmx.campaign_replyto_label'),
                        width: 500,
                        allowBlank: false
                    }
                    ,{
                        fieldLabel: _('cmx.lists_label')
                        ,id: 'cmx-superbox-lists'
                        ,name: 'lists[]'
                        ,xtype: 'modx-superbox-lists'
                        ,resizable: true
                        ,width: 500
                    }]
                }]
            }]
        },{
            title: _('cmx.campaign_content')
            ,itemId: 'form-content'
            ,defaults: { autoHeight: true }
            ,layout: 'form'
            ,items: [{
                html: '<p>'+_('cmx.campaign_content_intro')+'</p>'
                ,bodyCssClass: 'panel-desc'
                ,border: false
            },{
                xtype: 'panel'
                ,border: false
                ,layout: 'form'
                ,cls:'main-wrapper'
                ,labelAlign: 'top'
                ,items: [{
                    xtype: 'textarea'
                    ,fieldLabel: _('template_code')                     
                    ,name: 'content'
                    ,fieldLabel: _('cmx.campaign_content_label')
                    ,id: 'modx-template-content'
                    ,anchor: '100%'
                    ,height: 400
                    ,value: config.record.content || ''
                }]
            }]
        }],{
            id: 'modx-tabs'
        })]

        ,useLoadingMask: true
        ,listeners: {
            'setup': {fn:this.setup,scope:this}
            ,'success': {fn:this.success,scope:this}
        }
    });
    cmx.panel.CampaignForm.superclass.constructor.call(this,config);
    var isStatic = Ext.getCmp('modx-template-static');
    if (isStatic) { isStatic.on('check',this.toggleStaticFile); }
};
Ext.extend(cmx.panel.CampaignForm,MODx.FormPanel,{
    initialized: false
    ,setup: function() {
        if (this.initialized) { this.clearDirty(); return true; }
        this.getForm().setValues(this.config.record);
        if (!Ext.isEmpty(this.config.record.templatename)) {
            Ext.getCmp('modx-template-header').getEl().update('<h2>'+_('template')+': '+this.config.record.templatename+'</h2>');
        }
        if (!Ext.isEmpty(this.config.record.properties)) {
            var d = this.config.record.properties;
            var g = Ext.getCmp('modx-grid-element-properties');
            if (g) {
                g.defaultProperties = d;
                g.getStore().loadData(d);
            }
        }
        this.fireEvent('ready',this.config.record);
        this.initialized = true;
        MODx.fireEvent('ready');
        return true;
    }
    ,success: function(r) {

        // if (MODx.request.id) Ext.getCmp('modx-grid-element-properties').save();
        // Ext.getCmp('modx-grid-template-tv').getStore().commitChanges();
        // this.getForm().setValues(r.result.object);
        
        // var t = Ext.getCmp('modx-element-tree');
        // if (t) {
        //     var c = Ext.getCmp('modx-template-category').getValue();
        //     var u = c != '' && c != null && c != 0 ? 'n_template_category_'+c : 'n_type_template';
        //     var node = t.getNodeById('n_template_element_' + Ext.getCmp('modx-template-id').getValue() + '_' + r.result.object.previous_category);
        //     if (node) node.destroy();
        //     t.refreshNode(u,true);
        // }
    }
});
Ext.reg('cmx-panel-edit',cmx.panel.CampaignForm);