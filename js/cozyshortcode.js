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
                            text: 'price_table_1',
                            onclick: function () {
                                editor.insertContent('[price_table_1]');
                            }
                        },
                        {
                            text: 'price_table_2',
                            onclick: function () {
                                editor.insertContent('[price_table_2]');
                            }
                        },
                        {
                            text: 'price_table_3',
                            onclick: function () {
                                editor.insertContent('[price_table_3]');
                            }
                        },
                        {
                            text: 'price_table_4',
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
                    text: 'icon-list',
                    menu: [
                        {
                            text: 'icon-list',
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