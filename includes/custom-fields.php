<?php

if (function_exists("register_field_group")) {

//THEME OPTION SETTING - START HERE	
//Theme option - HEADER
    register_field_group(array(
        'id' => 'agent_header',
        'title' => 'Agent Header',
        'fields' => array(
            //TAB Agent Setting
            array(
                'key' => 'field_000000agentTab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Agent Setting',
            ),

            array(
                'key' => 'field_0000001agentTopheader',
                'label' => 'Header Top Background Image',
                'name' => 'agent_topheaderbg',
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),

            array(
                'key' => 'field_0000001agenthead',
                'label' => 'Agent Logo',
                'name' => 'agent_logo',
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),

            array(
                'key' => 'field_0000004agenthead',
                'label' => 'The broker website address',
                'name' => 'agent_url',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),

            array(
                'key' => 'field_0000002agenthead',
                'label' => 'Agent Image',
                'name' => 'agent_image',
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_0000003agenthead',
                'label' => 'Agent Name',
                'name' => 'agent_name',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),

            //TAB Intro Setting
            array(
                'key' => 'field_000000introTab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Intro Setting',
            ),
            array(
                'key' => 'field_0000001introset01',
                'label' => 'Intro Image',
                'name' => 'intro_img',
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_0000001introset02',
                'label' => 'Intro Tag Line',
                'name' => 'intro_tagline',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),


        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-theme-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));


//Theme option - HOME SETTING

    /*************************
     * Home Section
     **************************/
    register_field_group(array(
        'id' => 'home_setting',
        'title' => 'Home Setting',
        'fields' => array(
            //TAB 1
            array(
                'key' => 'field_0000001hometab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Home Section',
            ),
            array(
                'key' => 'field_0000001hometab00img',
                'label' => 'Verified Agent Logo',
                'name' => 'about_verified_img',
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_0000001hometab01',
                'label' => 'Title',
                'name' => 'about_header_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000001hometab02',
                'label' => 'Agent Description',
                'name' => 'about_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array(
                'key' => 'field_0000001hometab03',
                'label' => 'Know More Button Label',
                'name' => 'about_more_btnlbl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000001hometab04',
                'label' => 'Know More URL',
                'name' => 'about_more_btnurl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),

            array(
                'key' => 'field_0000001hometab05',
                'label' => 'Contact Button Label',
                'name' => 'about_contact_btnlbl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000001hometab06',
                'label' => 'Contact Button URL',
                'name' => 'about_contact_btnurl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
////////////////

            array(
                'key' => 'hometab_new_button_background',
                'label' => 'Background image upload field',
                'name' => 'new_button_background',
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),

            array(
                'key' => 'hometab_new_button_name',
                'label' => 'Button Name Field',
                'name' => 'new_button_name',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),

            array(
                'key' => 'hometab_new_button_url',
                'label' => 'Button URL Field',
                'name' => 'new_button_url',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
////////////////
            array(
                'key' => 'field_0000001hometab07',
                'label' => 'Quick Search Shortcode',
                'name' => 'about_quick_shortcode',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'no',
            ),

            //TAB 2
            array(
                'key' => 'field_0000002buyselltab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Buy &amp; Sell Section',
            ),
            array(
                'key' => 'field_0000002buyselltab01',
                'label' => 'Background Section Image',
                'name' => 'bsi_bg', //bsi - Buy Sell Investing
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_0000002buyselltab02',
                'label' => 'Description',
                'name' => 'bsi_description',
                'type' => 'textarea',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000002buyselltab03',
                'label' => 'Buying Button Label',
                'name' => 'bsi_buybtnlbl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000002buyselltab04',
                'label' => 'Buying Button URL',
                'name' => 'bsi_buybtnurl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000002buyselltab05',
                'label' => 'Selling Button Label',
                'name' => 'bsi_sellbtnlbl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000002buyselltab06',
                'label' => 'Selling Button URL',
                'name' => 'bsi_sellbtnurl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000002buyselltab07',
                'label' => 'Investing Button Label',
                'name' => 'bsi_investbtnlbl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000002buyselltab08',
                'label' => 'Investing Button URL',
                'name' => 'bsi_investbtnurl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),

            //TAB 3
            array(
                'key' => 'field_0000003fealisttab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Featured Listing Section',
            ),
            array(
                'key' => 'field_0000003fealisttab0',
                'label' => 'Title',
                'name' => 'homefea_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000003fealisttab00',
                'label' => 'Featured Listing Shortcode',
                'name' => 'homefea_shortcode',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'no',
            ),
            array(
                'key' => 'field_0000003fealisttab01',
                'label' => 'Button Label',
                'name' => 'homefea_btnlbl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000003fealisttab02',
                'label' => 'Button URL',
                'name' => 'homefea_btnurl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),

            //TAB 4
            array(
                'key' => 'field_0000004rblogtab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Front Blogs Section',
            ),
            array(
                'key' => 'field_0000004rblogtab00',
                'label' => 'Front Blog Title',
                'name' => 'rblog_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000004rblogtab01',
                'label' => 'Button Label',
                'name' => 'rblog_btnlbl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000004rblogtab02',
                'label' => 'Button URL',
                'name' => 'rblog_btnurl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),


        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-home-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));


//Theme option - FEATURED LISIING SETTING

    /*************************
     * Featured Listing Section
     **************************/
    register_field_group(array(
        'id' => 'fealist_setting',
        'title' => 'Featured Listing Setting',
        'fields' => array(

            //TAB 1
            array(
                'key' => 'field_0001fealisttab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Featured Listing Section',
            ),
            array(
                'key' => 'field_0001fealisttab0',
                'label' => 'Main Title',
                'name' => 'fealist_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0001fealisttab1',
                'label' => 'Featured Listing Shortcode',
                'name' => 'fealist_shortcode',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'no',
            ),


        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-featured-listings-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));


//Theme option - PROPERTIES SEARCH SETTING

    /*************************
     * Properties Search Section
     **************************/
    register_field_group(array(
        'id' => 'prosearch_setting',
        'title' => 'Properties Search Setting',
        'fields' => array(

            //TAB 1
            array(
                'key' => 'field_0001prostab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Properties Search Section',
            ),
            array(
                'key' => 'field_0001prostab0',
                'label' => 'Main Title',
                'name' => 'pros_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array (
                'key' => 'field_0001fealisttab1',
                'label' => 'Map Search Shortcode',
                'name' => 'mapsearch_shortcode',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'no',
            ),


        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-properties-search-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));


    /******************************
     * Buy, Sell & Invest Section
     ******************************/
    register_field_group(array(
        'id' => 'buysell_setting',
        'title' => 'Buying &amp; Selling Setting',
        'fields' => array(

            //TAB 1
            /*array(
                'key' => 'field_0000001sellbuytab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Homepage',
            ),

                array (
                    'key' => 'field_0000001sellbuytab1',
                    'label' => 'Divider Title',
                    'name' => 'buysell_divider_title',
                    'type' => 'text',
                    'column_width' => '',
                    'save_format' => 'id',
                ),
                array (
                    'key' => 'field_0000001sellbuytab2',
                    'label' => 'Home Page Buy &amp; Selling Description',
                    'name' => 'buysell_description',
                    'type' => 'wysiwyg',
                    'column_width' => '',
                    'save_format' => 'id',
                    'toolbar' => 'full',
                    'media_upload' => 'yes',
                ),
                array (
                    'key' => 'field_0000001sellbuytab3',
                    'label' => 'Buy Button Label',
                    'name' => 'buy_label',
                    'type' => 'text',
                    'column_width' => '',
                    'save_format' => 'id',
                ),
                array (
                    'key' => 'field_0000001sellbuytab4',
                    'label' => 'Buy Button URL',
                    'name' => 'buy_url',
                    'type' => 'text',
                    'column_width' => '',
                    'save_format' => 'id',
                ),
                array (
                    'key' => 'field_0000001sellbuytab5',
                    'label' => 'Sell Button Label',
                    'name' => 'sell_label',
                    'type' => 'text',
                    'column_width' => '',
                    'save_format' => 'id',
                ),
                array (
                    'key' => 'field_0000001sellbuytab6',
                    'label' => 'Sell Button URL',
                    'name' => 'sell_url',
                    'type' => 'text',
                    'column_width' => '',
                    'save_format' => 'id',
                ),*/

            //TAB 2
            array(
                'key' => 'field_0000002sellbuytab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Buying Page',
            ),

            array(
                'key' => 'field_0000002sellbuytab1',
                'label' => 'Header Title',
                'name' => 'buy_header_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000002sellbuytab2',
                'label' => 'Header Short Description',
                'name' => 'buy_short_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array(
                'key' => 'field_0000002sellbuytab3',
                'label' => 'Right Description',
                'name' => 'buy_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array(
                'key' => 'field_0000002sellbuytab4',
                'label' => 'Full Description',
                'name' => 'buy_full_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),

            //TAB 3
            array(
                'key' => 'field_0000003sellbuytab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Selling Page',
            ),
            array(
                'key' => 'field_0000003sellbuytab1',
                'label' => 'Header Title',
                'name' => 'sell_header_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000003sellbuytab2',
                'label' => 'Header Short Description',
                'name' => 'sell_short_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array(
                'key' => 'field_0000003sellbuytab3',
                'label' => 'Right Description',
                'name' => 'sell_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array(
                'key' => 'field_0000003sellbuytab4',
                'label' => 'Full Description',
                'name' => 'sell_full_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),

            //TAB 4
            array(
                'key' => 'field_0000004sellbuytab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Investing Page',
            ),
            array(
                'key' => 'field_0000004sellbuytab1',
                'label' => 'Header Title',
                'name' => 'invest_header_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000004sellbuytab2',
                'label' => 'Header Short Description',
                'name' => 'invest_short_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array(
                'key' => 'field_0000004sellbuytab3',
                'label' => 'Full Description',
                'name' => 'invest_full_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-buying-sell-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));


//Theme Option - Featured Settings
    /*register_field_group(array (
        'id' => 'featured_setting',
        'title' => 'Featured Setting',
        'fields' => array (
            array (
                'key' => 'field_000000001feadivider',
                'label' => 'Divider Title',
                'name' => 'fea_divider_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array (
                'key' => 'field_000000001fea',
                'label' => 'Header Title Label',
                'name' => 'fea_header_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array (
                'key' => 'field_000000002fea',
                'label' => 'See More Button Label',
                'name' => 'fea_btn_label',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array (
                'key' => 'field_000000002fea01',
                'label' => 'See More Button URL',
                'name' => 'fea_btn_url',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array (
                'key' => 'field_000000003fea',
                'label' => 'Properties Listings',
                'name' => 'fea_repeater',
                'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_000000003fea00',
                            'label' => 'Display in Front Page<br><i><font style="font-weight: normal; color: #ff0000;">If Yes, will display in front page.</font></i>',
                            'name' => 'fea_display_frontpage',
                            'type' => 'radio',
                            'choices' => array (
                                '1' => 'Yes',
                                '2' => 'No'
                            ),
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => '2',
                            'layout' => 'horizontal',
                    ),

                    array (
                        'key' => 'field_000000003fea01',
                        'label' => 'Upload Thumbnailss',
                        'name' => 'fea_image_url',
                        'type' => 'image',
                        'column_width' => '',
                        'save_format' => 'id',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                    array (
                        'key' => 'field_000000003fea02',
                        'label' => 'Vimeo Video URL ID<br><i><font style="font-weight: normal; color: #ff0000;">https://player.vimeo.com/video/131506757 <br> https://youtu.be/uU5YPIvJ24Y</font></i>',
                        'name' => 'fea_vimeo_url',
                        'type' => 'text',
                        'column_width' => '',
                        'save_format' => 'id',
                    ),
                    array (
                        'key' => 'field_000000003fea03',
                        'label' => 'Youtube Video URL ID<br><i><font style="font-weight: normal; color: #ff0000;">https://player.vimeo.com/video/131506757 <br> https://youtu.be/uU5YPIvJ24Y</font></i>',
                        'name' => 'fea_youtube_url',
                        'type' => 'text',
                        'column_width' => '',
                        'save_format' => 'id',
                    ),
                    array (
                        'key' => 'field_000000003fea04',
                            'label' => 'Select Display Video or Image in Feature Listings Section<br><i><font style="font-weight: normal; color: #ff0000;">Please choose which display do you want to display in featured listings section (Vimeo, youtube or image).</font></i>',
                            'name' => 'fea_display_imgvideo',
                            'type' => 'radio',
                            'choices' => array (
                                '1' => 'Vimeo Video',
                                '2' => 'Youtube Video',
                                '3' => 'Image',
                            ),
                            'other_choice' => 0,
                            'save_other_choice' => 0,
                            'default_value' => '3',
                            'layout' => 'horizontal',
                    ),
                    array (
                        'key' => 'field_000000003fea05',
                        'label' => 'Listing Title',
                        'name' => 'fea_listing_title',
                        'type' => 'text',
                        'column_width' => '',
                        'save_format' => 'id',
                    ),
                    array (
                        'key' => 'field_000000003fea06',
                        'label' => 'Properties Short Description',
                        'name' => 'fea_short_description',
                        'type' => 'wysiwyg',
                        'column_width' => '',
                        'save_format' => 'id',
                        'toolbar' => 'full',
                        'media_upload' => 'yes',
                    ),
                    array (
                        'key' => 'field_000000003fea07',
                        'label' => 'Property Website URL',
                        'name' => 'fea_property_url',
                        'type' => 'text',
                        'column_width' => '',
                        'save_format' => 'id',
                    ),

                ),
                'row_min' => 1,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Properties',
            ),

        ),
        'row_min' => 1,
        'row_limit' => '1',
        'layout' => 'row',
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-featured-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));*/


//Theme Option - Blog Settings
    register_field_group(array(
        'id' => 'blog_setting',
        'title' => 'Blog Setting',
        'fields' => array(
           /* array(
                'key' => 'field_000000001blog00',
                'label' => 'Divider Title',
                'name' => 'blog_divider_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),*/
			//TAB 1
            array(
                'key' => 'field_0000001blogingtab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Blog Main Setting',
            ),
				array(
					'key' => 'field_000000001blog01',
					'label' => 'Blog Header Title',
					'name' => 'blog_header_title',
					'type' => 'text',
					'column_width' => '',
					'save_format' => 'id',
				),
				 array(
					'key' => 'field_000000001blog02',
					'label' => 'Blog Header Title Color <br><font style="font-style: italic; color: #ff0000;">Eg: #FFFFFF</font>',
					'name' => 'blog_header_titlecolor',
					'type' => 'text',
					'column_width' => '',
					'save_format' => 'id',
				),
				 array(
					'key' => 'field_000000001blog03',
					'label' => 'Blog Header Title Shadow Color <br><font style="font-style: italic; color: #ff0000;">Eg: #000000</font>',
					'name' => 'blog_header_titleshadowcolor',
					'type' => 'text',
					'column_width' => '',
					'save_format' => 'id',
				),
        ),
        'row_min' => 1,
        'row_limit' => '1',
        'layout' => 'row',
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-blog-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));

//Theme Option - Quick Search Settings
    /*register_field_group(array (
        'id' => 'quicksearch_setting',
        'title' => 'Quick Search Setting',
        'fields' => array (
            array (
                'key' => 'field_000000001qsbgimg',
                'label' => 'Background Image',
                'name' => 'qs_bg_image',
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_000000001qsdivider',
                'label' => 'Divider Title',
                'name' => 'qs_divider_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array (
                'key' => 'field_000000001qs00',
                'label' => 'Title',
                'name' => 'qs_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array (
                'key' => 'field_000000001qs',
                'label' => 'Searching Data Description',
                'name' => 'qs_main_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            )
        ),
        'row_min' => 1,
        'row_limit' => '1',
        'layout' => 'row',
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-quick-search-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));*/

//Theme Option - Featured Settings
    /*register_field_group(array (
        'id' => 'search_setting',
        'title' => 'Search Property Setting',
        'fields' => array (
            array (
                'key' => 'field_000000001sp',
                'label' => 'Searching Data Description',
                'name' => 'sp_main_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array (
                'key' => 'field_000000002sp',
                'label' => 'Content Description',
                'name' => 'sp_content_description',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),


        ),
        'row_min' => 1,
        'row_limit' => '1',
        'layout' => 'row',
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-searching-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));*/


//Theme Option - Email Form Settings
    register_field_group(array(
        'id' => 'bottom_email',
        'title' => 'Bottom Email Setting',
        'fields' => array(
            array(
                'key' => 'field_0000002mail',
                'label' => 'Email Title',
                'name' => 'mail_title',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000004mail',
                'label' => 'Company Name',
                'name' => 'mail_form_company_name',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000005mail',
                'label' => 'Contact Number',
                'name' => 'mail_form_contact',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000006mail',
                'label' => 'Email Address',
                'name' => 'mail_form_email',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_0000007mail',
                'label' => 'Company Adress',
                'name' => 'mail_form_company_address',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-email-form-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));

//Theme Option - Communities Start
    register_field_group(array(
        'id' => 'front-communities',
        'title' => 'Communities Setting',
        'fields' => array(

            //TAB 1
            array(
                'key' => 'field_0000002comtab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Neighborhoods',
            ),
            array(
                'key' => 'field_0000002comtab1',
                'label' => 'Website URL<br><font style="font-weight: normal; color: #ff0000;"><i>Please fill in the neighborhood website url. Eg. http://www.circlevisions.com</i></font>',
                'name' => 'neighbor_url',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-community-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0
    ));

//Them Option - Communities End


//Theme Option - About Me
    register_field_group(array(
        'id' => 'aboutme_setting',
        'title' => 'About Me Setting',
        'fields' => array(

            //TAB 1
            array(
                'key' => 'field_000001aboutmetab',
                'name' => '',
                'type' => 'tab',
                'label' => 'About Me Section',
            ),
            array(
                'key' => 'field_000001aboutmetab1',
                'label' => 'Agent Name',
                'name' => 'aboutme_agentname',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_000001aboutmetab2',
                'label' => 'Agent Address',
                'name' => 'aboutme_agentadd',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_000001aboutmetab3',
                'label' => 'Agent Contact',
                'name' => 'aboutme_agentcontact',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
                'class' => 'shortVideoUrl',
            ),
            array(
                'key' => 'field_000001aboutmetab4',
                'label' => 'Agent Email',
                'name' => 'aboutme_agentemail',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
                'class' => 'shortVideoUrl',
            ),
            array(
                'key' => 'field_000011aboutmetab1',
                'label' => 'Agent Information',
                'name' => 'aboutme_agentinfo',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),

            array(
                'key' => 'field_000011aboutmetab3',
                'label' => 'Button Name <br><i>“Explorer Our Communities”</i>',
                'name' => 'button_name_aboutmetab',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
                'class' => 'shortVideoUrl',
            ),

            array(
                'key' => 'field_000012aboutmetab4',
                'label' => 'Button Url',
                'name' => 'button_url_aboutmetab',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
                'class' => 'shortVideoUrl',
            ),

            array(
                'key' => 'field_000001aboutmetab6',
                'label' => 'Agent Image<br><i><font style="font-weight: normal; color: #ff0000;">If no video, you can upload agent image.</font></i>',
                'name' => 'aboutme_agentimg',
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_000001aboutmetab7',
                'label' => 'Agent Youtube Video ID<br><i><font style="font-weight: normal; color: #ff0000;">Please fill in youtube video ID only. If no video, please leave it blank.</font></i>',
                'name' => 'aboutme_agentyoutube',
                'type' => 'text',
                'class' => 'shortVideoUrl',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_000001aboutmetab8',
                'label' => 'Agent Vimeo Video ID<br><i><font style="font-weight: normal; color: #ff0000;">Please fill in vimeo video ID only. If no video, please leave it blank.</font></i>',
                'name' => 'aboutme_agentvimeo',
                'type' => 'text',
                'class' => 'shortVideoUrl',
                'column_width' => '',
                'save_format' => 'id',
            ),

            array(
                'key' => 'field_000001aboutmetab9',
                'label' => 'Display Image or Video<br><i><font style="font-weight: normal; color: #ff0000;">Please select which you want to display in testimonial section. DEFAULT: Image</font></i>',
                'name' => 'aboutme_imgvideo',
                'type' => 'radio',
                'choices' => array(
                    '1' => 'Display Image',
                    '2' => 'Display Youtube Video',
                    '3' => 'Display Vimeo Video',
                ),
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => '1',
            ),
            array(
                'key' => 'field_000001aboutmetab10',
                'label' => 'Top Agent Badge',
                'name' => 'aboutme_agentbadge',
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),

            array (
                'key' => 'field_000001aboutmetab11',
                'name' => 'aboutme_social_media',
                'type' => 'repeater',
                'sub_fields' => array (
					array(
						'key' => 'field_000001aboutmetab11_1',
						'label' => 'Social Media Image',
						'name' => 'aboutme_socialmedia_img',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'id',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array(
						'key' => 'field_000001aboutmetab11_2',
						'label' => 'Social Media Hover Image',
						'name' => 'aboutme_socialmedia_hoverimg',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'id',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
                    array (
                        'key' => 'field_000001aboutmetab11_3',
                        'label' => 'Social media',
                        'name' => 'aboutme_social_mediaurl',
                        'type' => 'text',
                        'column_width' => '',
                        'save_format' => 'id',
                    ),
					array (
                        'key' => 'field_000001aboutmetab11_4',
						'label' => 'Activate Social Media',
						'name' => 'aboutme_activate_socialmedia',
						'id' => 'aboutme_activate_socialmedia',
						'type' => 'radio',
						'choices' => array (
							'1' => 'Yes',
							'2' => 'No'
						),
						'other_choice' => 0,
						'save_other_choice' => 0,
						'default_value' => '2',
						'layout' => 'horizontal',
                    ),

                ),
                'row_min' => 0,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Social Media',
            ),

            //TAB 2
            array(
                'key' => 'field_000002aboutmetab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Testimonial Section',
            ),
            array(
                'key' => 'field_000002aboutmetab0',
                'label' => 'Title',
                'name' => 'aboutme_testitle',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_000002aboutmetab1',
                'label' => 'Background Image',
                'name' => 'aboutme_testsectionbg',
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),

            //TAB 3
            array(
                'key' => 'field_000003aboutmetab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Sold Listing Section',
            ),
            array(
                'key' => 'field_000003aboutmetab0',
                'label' => 'Title',
                'name' => 'aboutme_soldtitle',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),


            //TAB 3
            array(
                'key' => 'field_000004aboutmetab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Skill Set Section',
            ),
            array(
                'key' => 'field_000004aboutmetab0',
                'label' => 'Title',
                'name' => 'aboutme_skilltitle',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_000004aboutmetab1',
                'label' => 'Description',
                'name' => 'aboutme_skilldesc',
                'type' => 'wysiwyg',
                'column_width' => '',
                'save_format' => 'id',
                'toolbar' => 'full',
                'media_upload' => 'no',
            ),
            array(
                'key' => 'field_000004aboutmetab2',
                'label' => 'Image',
                'name' => 'aboutme_skillimg',
                'type' => 'image',
                'column_width' => '',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
			array(
                'key' => 'field_000004aboutmetab4',
                'label' => 'Image URL<br><i><font style="font-weight: normal; color: #ff0000;">Eg: http://www.61bolla.com</font></i>',
                'name' => 'aboutme_skillimgurl',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),
            array(
                'key' => 'field_000004aboutmetab3',
                'name' => 'aboutme_skillrepeater',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_000004aboutmetab3_1',
                        'label' => 'Listing',
                        'name' => 'aboutme_skilllist',
                        'type' => 'text',
                        'column_width' => '',
                        'save_format' => 'id',
                    ),

                ),
                'row_min' => 0,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Listing',
            ),

        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-about-me-setting',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0
    ));


//THEME OPTION SETTING - END HERE


//START TEMPLATE CUSTOMIZATION


    /*Testimonial Custom Post*/
    register_field_group(array(
        'id' => 'custom_testimonial',
        'title' => 'Testimonial',
        'fields' => array(
            //TAB 1
            array(
                'key' => 'field_0000001tescusttab',
                'name' => '',
                'type' => 'tab',
                'label' => 'Customer Name / Position',
            ),
            array(
                'key' => 'field_0000001tescusttab1',
                'label' => 'Customer Name / Position',
                'name' => 'custest_custname',
                'type' => 'text',
                'column_width' => '',
                'save_format' => 'id',
            ),


        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'testimonials',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(),
        ),
        'menu_order' => 0,
    ));

//CUSTOM POST TYPE END


}//End of Custom


?>