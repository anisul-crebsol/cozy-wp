(function () {
    tinymce.PluginManager.add('cozy_shortcode_mce_button', function (editor, url) {
        editor.addButton('cozy_shortcode_mce_button', {
            text: 'Cozy Shortcode',
            icon: false,
            type: 'menubutton',
            menu: [
                {
                    text: 'Price Table',
                    menu: [
                        {
                            text: 'Price Table 1',
                            onclick: function () {
                                editor.insertContent('[price_table_1]');
                            }
                        },
                        {
                            text: 'Price Table 2',
                            onclick: function () {
                                editor.insertContent('[price_table_2]');
                            }
                        },
                        {
                            text: 'Price Table 3',
                            onclick: function () {
                                editor.insertContent('[price_table_3]');
                            }
                        },
                        {
                            text: 'Price Table 4',
                            onclick: function () {
                                editor.insertContent('[price_table_4]');
                            }
                        }
                    ]
                },
                {
                    text: 'FAQ',
                    menu: [
                        {
                            text: 'faq',
                            onclick: function () {
                                editor.insertContent('[faq]');
                            }
                        }
                    ]
                },
                {
                    text: 'More Info Widget',
                    menu: [
                        {
                            text: 'More Info Widget Style 1',
                            onclick: function () {
                                editor.insertContent('[more_info_1]');
                            }
                        },
                        {
                            text: 'More Info Widget Style 2',
                            onclick: function () {
                                editor.insertContent('[more_info_2]');
                            }
                        }
                    ]
                },
                  {
                    text: 'Icon List',
                    menu: [
                        {
                            text: 'Icon List',
                            onclick: function () {
                                editor.insertContent('[cozy_icon_pack]');
                            }
                        }
                    ]
                }
            ]
        });
    });
})();