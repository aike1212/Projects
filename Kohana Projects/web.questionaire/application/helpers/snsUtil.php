<?php defined('SYSPATH') OR die('No direct access allowed.');

class snsUtil
{
    public static function stylesheet_selector($current_site)
    {
        switch($current_site)
        {
            case 'main':
                return html::stylesheet('styles/main.css.css');
                break;
            case 'registration':
                return html::stylesheet('styles/register.css.css');
                break;
            case 'questionnaire_selection':
                return html::stylesheet('styles/question_select.css.css');
                break;
            case 'request':
                return html::stylesheet('styles/request.css.css');
                break;
            case 'request/page_2':
                return html::stylesheet('styles/request.css.css');
                break;
            case 'request/page_3':
                return html::stylesheet('styles/request.css.css');
                break;
            case 'creative':
                return html::stylesheet('styles/creative.css.css');
                break;
            case 'creative/page_2':
                return html::stylesheet('styles/creative.css.css');
                break;
            case 'creative/page_3':
                return html::stylesheet('styles/creative.css.css');
                break;
            case 'creative/page_4':
                return html::stylesheet('styles/creative.css.css');
                break;
            case 'admin_login':
                return html::stylesheet('styles/admin_login.css.css');
                break;
            case 'admin_page':
                return html::stylesheet('styles/admin_page.css.css');
                break;
            case 'admin_page/view_question':
                return html::stylesheet('styles/view_questions.css.css');
                break;
            case 'admin_page/add_question':
                return html::stylesheet('styles/add_question.css.css');
                break;
            default:
                return html::stylesheet('styles/view_profile.css.css');
                break;
        }
    }

    public static function question_11_choice_picker($choice, $option)
    {
        if ($option == '1')
        {
            switch($choice)
            {
                case '1':
                    return 'Bulk uploading of products';
                    break;
                case '2':
                    return 'Shopping cart';
                    break;
                case '3':
                    return 'Inventory management';
                    break;
                case '4':
                    return 'Online payment';
                    break;
            }
        }
        else if ($option == '2')
        {
            switch($choice)
            {
                case 'Bulk uploading of products':
                    return '1';
                    break;
                case 'Shopping cart':
                    return '2';
                    break;
                case 'Inventory management':
                    return '3';
                    break;
                case 'Online payment':
                    return '4';
                    break;
            }
        }
    }

    public static function question_13_choice_picker($choice, $option)
    {
        if($option == 1)
        {
            switch($choice)
            {
                case '1':
                    return 'CMS - website editing';
                    break;
                case '2':
                    return 'News/article posting';
                    break;
                case '3':
                    return 'Home page: featured content slideshow';
                    break;
                case '4':
                    return 'Product catalogue + search';
                    break;
                case '5':
                    return 'Upload/download section';
                    break;
                case '6':
                    return 'Product reviews';
                    break;
                case '7':
                    return 'Gallery slideshow';
                    break;
                case '8':
                    return 'Events &amp; calendar';
                    break;
                case '9':
                    return 'RSS feeds';
                    break;
                case '10':
                    return 'Newsletters';
                    break;
                case '11':
                    return 'Registration and login';
                    break;
                case '12':
                    return 'Forum';
                    break;
                case '13':
                    return 'Website search';
                    break;
            }
        }
        else if($option == 2)
        {
            switch($choice)
            {
                case 'CMS - website editing':
                    return '1';
                    break;
                case 'News/article posting':
                    return '2';
                    break;
                case 'Home page: featured content slideshow':
                    return '3';
                    break;
                case 'Product catalogue + search':
                    return '4';
                    break;
                case 'Upload/download section':
                    return '5';
                    break;
                case 'Product reviews':
                    return '6';
                    break;
                case 'Gallery slideshow':
                    return '7';
                    break;
                case 'Events &amp; calendar':
                    return '8';
                    break;
                case 'RSS feeds':
                    return '9';
                    break;
                case 'Newsletters':
                    return '10';
                    break;
                case 'Registration and login':
                    return '11';
                    break;
                case 'Forum':
                    return '12';
                    break;
                case 'Website search':
                    return '13';
                    break;
            }
        }
    }

    public static function get_user_answer_by_question($user_id, $question_id)
    {
        $answr_table = new TblAnswers();
        $pre_query = $answr_table->get_answer_by_question($user_id, $question_id);
        $query = $pre_query->execute();
        $answer = $query[0]->answer;
        return $answer;
    }

    public static function javascript_selector($current_site)
    {
        switch($current_site)
        {
            case 'admin_page/add_question':
                return html::script('scripts/dropdown_value.js');
                break;
        }
    }
}
?>
