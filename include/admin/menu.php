<?php 

function ex_admin_menu()
{
    add_menu_page(
        'Guidall option',
        'Guidall option',
        'edit_theme_options',
        'ex_guidall',
        'ex_options_page_html'
    );
}