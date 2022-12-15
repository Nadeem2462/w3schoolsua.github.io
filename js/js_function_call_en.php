<!DOCTYPE html>
<html lang='en'>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='ie=edge'>
<link rel='icon' href='../favicon.ico' type='image/x-icon'>
<link rel='stylesheet' href='../styles/w3.css'>
<link rel='stylesheet' href='../styles/external.css'>
<meta property='og:image' content='../images/w3schools_logo_436_2.png'>
<meta property='og:image:type' content='image/png'>
<meta property='og:image:width' content='436'>
<meta property='og:image:height' content='228'>
<meta property='og:description' content='Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.'>
<!--web--><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6358227327561384" crossorigin="anonymous"></script><!--/web-->
<!--w3--><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4060216941760396" crossorigin="anonymous"></script><!--/w3--><title>JavaScript Function call(). Lessons for beginners. W3Schools in English</title>
<meta name='description' content='JavaScript Function call(). Method Reuse. All Functions are Methods. What is this? The JavaScript call() Method. The call() Method with Arguments. Examples. Lessons for beginners. W3Schools in English'>
<div class='w3-container top'>
    <a class='w3schools-logo notranslate' href='../index_en.html'>W3schoolsEN<span class='dotcom w3-hide-small'>. TheBest</span></a>
    <div class='w3-right w3-hide-small w3-wide toptext' style="font-family:'Segoe UI',Arial,sans-serif">BEST SITE FOR WEB DEVELOPERS</div>
</div>
<div style='display:none;position:absolute;z-index:4;right:52px;height:44px;background-color:#5f5f5f;letter-spacing:normal;' id='googleSearch'>
    <!--W3SchoolsUA-Google-Search-->
    <script async src="https://cse.google.com/cse.js?cx=751c3d18bb8a64f00"></script><div class="gcse-search"></div>
    <!--/W3SchoolsUA-Google-Search-->
</div>
<!--Top menu-->
<div class='w3-card-2 topnav notranslate' id='topnav'>
    <div style='overflow:auto;'>
        <div class='w3-bar w3-left' style='width:100%;overflow:hidden;height:44px'>
            <a class='topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button' href='javascript:void(0);' onclick='open_menu()' title='Меню'></a>
            <a class='topnav-icons fa fa-home w3-left w3-bar-item w3-button' href='../index_en.html' title='main'></a>
            <a class='w3-bar-item w3-button' href='../html/index_en.html' title='HTML Tutorial'>HTML</a>
            <a class='w3-bar-item w3-button' href='../css/index_en.html' title='CSS Tutorial'>CSS</a>
            <a class='w3-bar-item w3-button' href='../js/index_en.html' title='JavaScript Tutorial'>JAVASCRIPT</a>
            <a class='w3-bar-item w3-button' href='../sql/index_en.html' title='SQL Tutorial'>SQL</a>
            <a class='w3-bar-item w3-button' href='../python/index_en.html' title='Python Tutorial'>PYTHON</a>
            <a class='w3-bar-item w3-button' href='../php/index_en.html' title='PHP Tutorial'>PHP</a>
            <a class='w3-bar-item w3-button' href='../bootstrap/bootstrap_ver_en.html' title='Bootstrap Tutorial'>BOOTSTRAP</a>
            <a class='w3-bar-item w3-button' href='../howto/index_en.html' title='How To'>HOW TO</a>
            <a class='w3-bar-item w3-button' href='../w3css/index_en.html' title='W3.CSS Tutorial'>W3.CSS</a>
            <a class='w3-bar-item w3-button' href='../jquery/index_en.html' title='jQuery Tutorial'>JQUERY</a>
            <a class='w3-bar-item w3-button' href='../xml/index_en.html' title='XML Tutorial'>XML</a>
            <a class='w3-bar-item w3-button' href='../java/index_en.html' title='Java Tutorial'>JAVA</a>
            <a class='w3-bar-item w3-button' id='topnavbtn_tutorials' href='javascript:void(0);' onclick='w3_open_nav("tutorials")' title='More tutorials'>More <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style='display:none'></i></a>
            <a class='topnav-icons fa w3-right w3-bar-item w3-button' href='javascript:void(0);' onclick='open_search(this)' title='Search'>&#128269;</a>
            <a class='topnav-icons fa w3-right w3-bar-item w3-button' href='javascript:void(0);' onclick='changecodetheme(this)' title='Dark theme'>&#9681;</a>
            <a class='w3-bar-item w3-button w3-right' target='_blank' href='https://drive.google.com/open?id=1fddM8chCC273SbiTEYVNLorbZ2qij7fp' title='Download books for free from Google drive'>Books</a>
            <a class="w3-bar-item w3-button w3-right" id='topnavbtn_references' href='javascript:void(0);' onclick='w3_open_nav("references")' title='References'>REFERENCES <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style='display:none'></i></a>
            <a class="w3-bar-item w3-button w3-right" id='topnavbtn_exercises' href='javascript:void(0);' onclick='w3_open_nav("exercises")' title='Exercises'>EXERCISES <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style='display:none'></i></a>
        </div>
        <div id='nav_tutorials' class='w3-bar-block w3-card-2' style="display:none;">
            <span onclick='w3_close_nav("tutorials")' class='w3-button w3-xlarge w3-right' style="position:absolute;right:0;font-weight:bold;">&times;</span>
            <div class='w3-row-padding' style="padding:24px 48px">
                <div class='w3-col l3 m6'>
                    <h3>HTML и CSS</h3>
                    <a class='w3-bar-item w3-button' href='../html/index_en.html'>Learn HTML</a>
                    <a class='w3-bar-item w3-button' href='../css/index_en.html'>Learn CSS</a>
                    <a class='w3-bar-item w3-button' href='../css/css_rwd_intro_en.html'>Learn RWD</a>
                    <a class='w3-bar-item w3-button' href='../bootstrap/bootstrap_ver_en.html'>Learn Bootstrap</a>
                    <a class='w3-bar-item w3-button' href='../w3css/index_en.html'>Learn W3.CSS</a>
                    <a class='w3-bar-item w3-button' href='../colors/index_en.html'>Learn Colors</a>
                    <a class='w3-bar-item w3-button' href='../icons/index_en.html'>Learn Icons</a>
                    <a class='w3-bar-item w3-button' href='../graphics/index_en.html'>Learn Graphics</a>
                    <a class='w3-bar-item w3-button' href='../graphics/svg_intro_en.html'>Learn SVG</a>
                    <a class='w3-bar-item w3-button' href='../graphics/canvas_intro_en.html'>Learn Canvas</a>
                    <a class='w3-bar-item w3-button' href='../howto/index_en.html'>Learn How To</a>
                    <a class='w3-bar-item w3-button' href='../sass/index_en.html'>Learn Sass</a>
                    <div class="w3-hide-large w3-hide-small">
                        <h3>Data Analytics</h3>
                        <a class='w3-bar-item w3-button' href="../ai/index_en.html">Learn AI</a>
                        <a class='w3-bar-item w3-button' href='../python/python_ml_getting_started_en.html'>Learn Machine Learning</a>
                        <a class='w3-bar-item w3-button' href='../datascience/index_en.html'>Learn Data Science</a>
                        <a class='w3-bar-item w3-button' href='../numpy/index_en.html'>Learn NumPy</a>
                        <a class='w3-bar-item w3-button' href='../pandas/index_en.html'>Learn Pandas</a>
                        <a class='w3-bar-item w3-button' href='../scipy/index_en.html'>Learn SciPy</a>
                        <a class='w3-bar-item w3-button' href='../python/matplotlib_intro_en.html'>Learn Matplotlib</a>
                        <a class='w3-bar-item w3-button' href='../statistics/index_en.html'>Learn Statistics</a>
                        <a class='w3-bar-item w3-button' href='../excel/index_en.html'>Learn Excel</a>
                        <a class='w3-bar-item w3-button' href='../googlesheets/index_en.html'>Learn Google Sheets</a>
                        <h3>XML</h3>
                        <a class='w3-bar-item w3-button' href='../xml/index_en.html'>Learn XML</a>
                        <a class='w3-bar-item w3-button' href='../xml/ajax_intro_en.html'>Learn XML AJAX</a>
                        <a class='w3-bar-item w3-button' href='../xml/dom_intro_en.html'>Learn XML DOM</a>
                        <a class='w3-bar-item w3-button' href='../xml/xml_dtd_intro_en.html'>Learn XML DTD</a>
                        <a class='w3-bar-item w3-button' href='../xml/schema_intro_en.html'>Learn XML Schema</a>
                        <a class='w3-bar-item w3-button' href='../xml/xsl_intro_en.html'>Learn XSLT</a>
                        <a class='w3-bar-item w3-button' href='../xml/xpath_intro_en.html'>Learn XPath</a>
                        <a class='w3-bar-item w3-button' href='../xml/xquery_intro_en.html'>Learn XQuery</a>
                    </div>
                </div>
                <div class='w3-col l3 m6'>
                    <h3>JavaScript</h3>
                    <a class='w3-bar-item w3-button' href='../js/index_en.html'>Learn JavaScript</a>
                    <a class='w3-bar-item w3-button' href='../jquery/index_en.html'>Learn jQuery</a>
                    <a class='w3-bar-item w3-button' href='../react/index_en.html'>Learn React</a>
                    <a class='w3-bar-item w3-button' href='../angular/index_en.html'>Learn AngularJS</a>
                    <a class='w3-bar-item w3-button' href='../js/js_json_intro_en.html'>Learn JSON</a>
                    <a class='w3-bar-item w3-button' href='../js/js_ajax_intro_en.html'>Learn AJAX</a>
                    <a class='w3-bar-item w3-button' href='../appml/index_en.html'>Learn AppML</a>
                    <a class='w3-bar-item w3-button' href='../w3js/index_en.html'>Learn W3.JS</a>
                    <h3>Programming</h3>
                    <a class='w3-bar-item w3-button' href='../python/index_en.html'>Learn Python</a>
                    <a class='w3-bar-item w3-button' href='../java/index_en.html'>Learn Java</a>
                    <a class='w3-bar-item w3-button' href='../c/index_en.html'>Learn C</a>
                    <a class='w3-bar-item w3-button' href='../cpp/index_en.html'>Learn C++</a>
                    <a class='w3-bar-item w3-button' href='../cs/index_en.html'>Learn C#</a>
                    <a class='w3-bar-item w3-button' href='../r/index_en.html'>Learn R</a>
                    <a class='w3-bar-item w3-button' href='../kotlin/index_en.html'>Learn Kotlin</a>
                    <a class='w3-bar-item w3-button' href='../go/index_en.html'>Learn Go</a>
                    <a class='w3-bar-item w3-button' href='../django/index_en.html'>Learn Django</a>
                    <a class='w3-bar-item w3-button' href='../typescript/index_en.html'>Learn TypeScript</a>
                    <div class='w3-hide-small'><br class='w3-hide-medium w3_hide-small'><br class='w3-hide-medium w3_hide-small'></div>
                </div>
                <div class='w3-col l3 m6'>
                    <h3>Server Side</h3>
                    <a class='w3-bar-item w3-button' href='../sql/index_en.html'>Learn SQL</a>
                    <a class='w3-bar-item w3-button' href='../mysql/index_en.html'>Learn MySQL</a>
                    <a class='w3-bar-item w3-button' href='../php/index_en.html'>Learn PHP</a>
                    <a class='w3-bar-item w3-button' href='../asp/index_en.html'>Learn ASP</a>
                    <a class='w3-bar-item w3-button' href='../nodejs/index_en.html'>Learn Node.js</a>
                    <a class='w3-bar-item w3-button' href='../nodejs/nodejs_raspberrypi_en.html'>Learn Raspberry Pi</a>
                    <a class='w3-bar-item w3-button' href='../git/index_en.html'>Learn Git</a>
                    <a class='w3-bar-item w3-button' href='../githubpages/index_en.html'>Learn GitHub Pages</a>
                    <a class='w3-bar-item w3-button' href='../aws/index_en.html'>Learn AWS Cloud</a>
                    <h3>Web Building</h3>
                    <a class='w3-bar-item w3-button' href='../where_to_start_en.html'>Where To Start</a>
                    <a class='w3-bar-item w3-button' href='../w3css/w3css_templates_en.html'>Web Templates</a>
                    <a class='w3-bar-item w3-button' href='../browsers/index_en.html'>Web Statistics</a>
                    <a class='w3-bar-item w3-button' href='../tryit/index_en.html'>Code Editor</a>
                    <a class='w3-bar-item w3-button' href='../whatis/index_en.html'>Web Development</a>
                    <a class='w3-bar-item w3-button' href='../cybersecurity/index_en.html'>Cyber Security</a>
                    <a class='w3-bar-item w3-button' href='../accessibility/index_en.html'>Accessibility</a>
                    <a class='w3-bar-item w3-button' href='https://www.w3schools.com/typingspeed/default.html' target='_blank' rel='nofollow'>Typing Speeds Test</a>
                    <a class='w3-bar-item w3-button' href='https://www.w3schools.com/codegame/index.html' target='_blank' rel='nofollow'>Code Game</a>
                </div>
                <div class='w3-col l3 m6 w3-hide-medium'>
                    <h3>Data Analytics</h3>
                    <a class='w3-bar-item w3-button' href='../ai/index_en.html'>Learn AI</a>
                    <a class='w3-bar-item w3-button' href='../python/python_ml_getting_started_en.html'>Learn Machine Learning</a>
                    <a class='w3-bar-item w3-button' href='../datascience/index_en.html'>Learn Data Science</a>
                    <a class='w3-bar-item w3-button' href='../numpy/index_en.html'>Learn NumPy</a>
                    <a class='w3-bar-item w3-button' href='../pandas/index_en.html'>Learn Pandas</a>
                    <a class='w3-bar-item w3-button' href='../scipy/index_en.html'>Learn SciPy</a>
                    <a class='w3-bar-item w3-button' href='../python/matplotlib_intro_en.html'>Learn Matplotlib</a>
                    <a class='w3-bar-item w3-button' href='../statistics/index_en.html'>Learn Statistics</a>
                    <a class='w3-bar-item w3-button' href='../excel/index_en.html'>Learn Excel</a>
                    <a class='w3-bar-item w3-button' href='../googlesheets/index_en.html'>Learn Google sheets</a>
                    <h3>XML</h3>
                    <a class='w3-bar-item w3-button' href='../xml/index_en.html'>Learn XML</a>
                    <a class='w3-bar-item w3-button' href='../xml/ajax_intro_en.html'>Learn XML AJAX</a>
                    <a class='w3-bar-item w3-button' href='../xml/dom_intro_en.html'>Learn XML DOM</a>
                    <a class='w3-bar-item w3-button' href='../xml/xml_dtd_intro_en.html'>Learn XML DTD</a>
                    <a class='w3-bar-item w3-button' href='../xml/schema_intro_en.html'>Learn XML Schema</a>
                    <a class='w3-bar-item w3-button' href='../xml/xsl_intro_en.html'>Learn XSLT</a>
                    <a class='w3-bar-item w3-button' href='../xml/xpath_intro_en.html'>Learn XPath</a>
                    <a class='w3-bar-item w3-button' href='../xml/xquery_intro_en.html'>Learn XQuery</a>
                </div>
            </div>
            <br>
        </div>
        <div id='nav_references' class='w3-bar-block w3-card-2'>
            <span onclick='w3_close_nav("references")' class='w3-button w3-xlarge w3-right' style="position:absolute;right:0;font-weight:bold;">&times;</span>
            <div class='w3-row-padding' style="padding:24px 48px">
                <div class='w3-col l3 m6'>
                    <h3>HTML</h3>
                    <a class='w3-bar-item w3-button' href='../tags/index_en.html'>HTML Tag Reference</a>
                    <a class='w3-bar-item w3-button' href='../tags/ref_html_browsersupport_en.html'>HTML Browser Support</a>
                    <a class='w3-bar-item w3-button' href='../tags/ref_eventattributes_en.html'>HTML Event Reference</a>
                    <a class='w3-bar-item w3-button' href='../colors/index_en.html'>HTML Color Reference</a>
                    <a class='w3-bar-item w3-button' href='../tags/ref_attributes_en.html'>HTML Attribute Reference</a>
                    <a class='w3-bar-item w3-button' href='../tags/ref_canvas_en.html'>HTML Canvas Reference</a>
                    <a class='w3-bar-item w3-button' href='../graphics/svg_reference_en.html'>HTML SVG Reference</a>
                    <a class='w3-bar-item w3-button' href='../graphics/google_maps_reference_en.html'>Google Maps Reference</a>
                    <h3>CSS</h3>
                    <a class='w3-bar-item w3-button' href='../cssref/index_en.html'>CSS Reference</a>
                    <a class='w3-bar-item w3-button' href='../cssref/css3_browsersupport_en.html'>CSS Browser Support</a>
                    <a class='w3-bar-item w3-button' href='../cssref/css_selectors_en.html'>CSS Selector Reference</a>
                    <a class='w3-bar-item w3-button' href='../bootstrap/bootstrap_ref_all_classes_en.html'>Bootstrap 3 Reference</a>
                    <a class='w3-bar-item w3-button' href='../bootstrap4/bootstrap_ref_all_classes_en.html'>Bootstrap 4 Reference</a>
                    <a class='w3-bar-item w3-button' href='../w3css/w3css_references_en.html'>W3.CSS Reference</a>
                    <a class='w3-bar-item w3-button' href='../icons/icons_reference_en.html'>Icons Reference</a>
                    <a class='w3-bar-item w3-button' href='../sass/sass_functions_string_en.html'>Sass Reference</a>
                </div>
                <div class='w3-col l3 m6'>
                    <h3>JavaScript</h3>
                    <a class='w3-bar-item w3-button' href='../jsref/index_en.html'>JavaScript Reference</a>
                    <a class='w3-bar-item w3-button' href='../jsref/index_en.html'>HTML DOM Reference</a>
                    <a class='w3-bar-item w3-button' href='../jquery/jquery_ref_overview_en.html'>jQuery Reference</a>
                    <a class='w3-bar-item w3-button' href='../angular/angular_ref_directives_en.html'>AngularJS Reference</a>
                    <a class='w3-bar-item w3-button' href='../appml/appml_reference_en.html'>AppML Reference</a>
                    <a class='w3-bar-item w3-button' href='../w3js/w3js_references_en.html'>W3.JS Reference</a>
                    <a class='w3-bar-item w3-button' href='../readyscripts/index_en.html'>JS Ready Scripts</a>
                    <h3>Programming</h3>
                    <a class='w3-bar-item w3-button' href='../python/python_reference_en.html'>Python Reference</a>
                    <a class='w3-bar-item w3-button' href='../java/java_ref_keywords_en.html'>Java Reference</a>
                </div>
                <div class='w3-col l3 m6'>
                    <h3>Server Side</h3>
                    <a class='w3-bar-item w3-button' href='../sql/sql_ref_keywords_en.html'>SQL Reference</a>
                    <a class='w3-bar-item w3-button' href='../mysql/mysql_ref_functions_en.html'>MySQL Reference</a>
                    <a class='w3-bar-item w3-button' href='../php/php_ref_overview_en.html'>PHP Reference</a>
                    <a class='w3-bar-item w3-button' href='../asp/asp_ref_response_en.html'>ASP Reference</a>
                    <h3>XML</h3>
                    <a class='w3-bar-item w3-button' href='../xml/dom_nodetype_en.html'>XML DOM Reference</a>
                    <a class='w3-bar-item w3-button' href='../xml/dom_http_en.html'>XML Http Reference</a>
                    <a class='w3-bar-item w3-button' href='../xml/xsl_elementref_en.html'>XSLT Reference</a>
                    <a class='w3-bar-item w3-button' href='../xml/schema_elements_ref_en.html'>XML Schema Reference</a>
                </div>
                <div class='w3-col l3 m6 w3-hide-medium w3-hide-small'>
                    <h3>Character Sets</h3>
                    <a class='w3-bar-item w3-button' href='../charsets/index_en.html'>HTML Character Sets</a>
                    <a class='w3-bar-item w3-button' href='../charsets/ref_html_ascii_en.html'>HTML ASCII</a>
                    <a class='w3-bar-item w3-button' href='../charsets/ref_html_ansi_en.html'>HTML ANSI</a>
                    <a class='w3-bar-item w3-button' href='../charsets/ref_html_ansi_en.html'>HTML Windows-1252</a>
                    <a class='w3-bar-item w3-button' href='../charsets/ref_html_8859_en.html'>HTML ISO-8859-1</a>
                    <a class='w3-bar-item w3-button' href='../charsets/ref_html_symbols_en.html'>HTML Symbols</a>
                    <a class='w3-bar-item w3-button' href='../charsets/ref_html_utf8_en.html'>HTML UTF-8</a>
                </div>
            </div>
            <br>
        </div>
        <div id='nav_exercises' class='w3-bar-block w3-card-2'>
            <span onclick='w3_close_nav("exercises")' class='w3-button w3-xlarge w3-right' style='position:absolute;right:0;font-weight:bold;'>&times;</span>
            <div class='w3-row-padding' style='padding:24px 48px'>
                <div class='w3-col l4 m6'>
                    <h3>Exercises</h3>
                    <a class='w3-bar-item w3-button' href='../html/html_exercises_en.html'>HTML Exercises</a>
                    <a class='w3-bar-item w3-button' href='../css/css_exercises_en.html'>CSS Exercises</a>
                    <a class='w3-bar-item w3-button' href='../js/js_exercises_en.html'>JavaScript Exercises</a>
                    <a class='w3-bar-item w3-button' href='../sql/sql_exercises_en.html'>SQL Exercises</a>
                    <a class='w3-bar-item w3-button' href='../mysql/mysql_exercises_en.html'>MySQL Exercises</a>
                    <a class='w3-bar-item w3-button' href='../php/php_exercises_en.html'>PHP Exercises</a>
                    <a class='w3-bar-item w3-button' href='../python/python_exercises_en.html'>Python Exercises</a>
                    <a class='w3-bar-item w3-button' href='../numpy/numpy_exercises_en.html'>NumPy Exercises</a>
                    <a class='w3-bar-item w3-button' href='../pandas/pandas_exercises_en.html'>Pandas Exercises</a>
                    <a class='w3-bar-item w3-button' href='../scipy/scipy_exercises_en.html'>SciPy Exercises</a>
                    <a class='w3-bar-item w3-button' href='../jquery/jquery_exercises_en.html'>jQuery Exercises</a>
                    <a class='w3-bar-item w3-button' href='../java/java_exercises_en.html'>Java Exercises</a>
                    <a class='w3-bar-item w3-button' href='../bootstrap/bootstrap_exercises_en.html'>Bootstrap Exercises</a>
                    <a class='w3-bar-item w3-button' href='../bootstrap4/bootstrap_exercises_en.html'>Bootstrap 4 Exercises</a>
                    <a class='w3-bar-item w3-button' href='../cpp/cpp_exercises_en.html'>C++ Exercises</a>
                    <a class='w3-bar-item w3-button' href='../cs/cs_exercises_en.html'>C# Exercises</a>
                    <a class='w3-bar-item w3-button' href='../r/r_exercises_en.html'>R Exercises</a>
                    <a class='w3-bar-item w3-button' href='../kotlin/cotlin_exercises_en.html'>Kotlin Exercises</a>
                    <a class='w3-bar-item w3-button' href='../go/go_exercises_en.html'>Go Exercises</a>
                    <a class='w3-bar-item w3-button' href='../git/git_exercises_en.html'>Git Exercises</a>
                </div>
                <div class='w3-col l4 m6'>
                    <h3>Quizzes</h3>
                    <a class='w3-bar-item w3-button' href='../html/html_quiz_en.html' target='_top'>HTML Quiz</a>
                    <a class='w3-bar-item w3-button' href='../css/css_quiz_en.html' target='_top'>CSS Quiz</a>
                    <a class='w3-bar-item w3-button' href='../js/js_quiz_en.html' target='_top'>JavaScript Quiz</a>
                    <a class='w3-bar-item w3-button' href='../sql/sql_quiz_en.html' target='_top'>SQL Quiz</a>
                    <a class='w3-bar-item w3-button' href='../mysql/mysql_quiz_en.html' target='_top'>MySQL Quiz</a>
                    <a class='w3-bar-item w3-button' href='../php/php_quiz_en.html' target='_top'>PHP Quiz</a>
                    <a class='w3-bar-item w3-button' href='../python/python_quiz_en.html' target='_top'>Python Quiz</a>
                    <a class='w3-bar-item w3-button' href='../numpy/numpy_quiz_en.html' target='_top'>NumPy Quiz</a>
                    <a class='w3-bar-item w3-button' href='../pandas/pandas_quiz_en.html' target='_top'>Pandas Quiz</a>
                    <a class='w3-bar-item w3-button' href='../scipy/scipy_quiz_en.html' target='_top'>SciPy Quiz</a>
                    <a class='w3-bar-item w3-button' href='../jquery/jquery_quiz_en.html' target='_top'>jQuery Quiz</a>
                    <a class='w3-bar-item w3-button' href='../java/java_quiz_en.html' target='_top'>Java Quiz</a>
                    <a class='w3-bar-item w3-button' href='../bootstrap/bootstrap_quiz_en.html' target='_top'>Bootstrap Quiz</a>
                    <a class='w3-bar-item w3-button' href='../bootstrap4/bootstrap_quiz_en.html' target='_top'>Bootstrap 4 Quiz</a>
                    <a class='w3-bar-item w3-button' href='../cpp/cpp_quiz_en.html' target='_top'>C++ Quiz</a>
                    <a class='w3-bar-item w3-button' href='../cs/cs_quiz_en.html' target='_top'>C# Quiz</a>
                    <a class='w3-bar-item w3-button' href='../r/r_quiz_en.html' target='_top'>R Quiz</a>
                    <a class='w3-bar-item w3-button' href='../xml/xml_quiz_en.html' target='_top'>XML Quiz</a>
                    <a class='w3-bar-item w3-button' href='../cybersecurity/cybersecurity_quiz_en.html' target='_top'>Cyber Security Quiz</a>
                    <a class='w3-bar-item w3-button' href='../accessibility/accessibility_quiz_en.html' target='_top'>Accessibility Quiz</a>
                </div>
                <div class='w3-col l4 m12'>
                    <h3>Certificates</h3>
                    <a class='w3-bar-item w3-button' href='../cert/cert_html_new_en.html' target='_top'>HTML Certificate</a>
                    <a class='w3-bar-item w3-button' href='../cert/cert_css_en.html' target='_top'>CSS Certificate</a>
                    <a class='w3-bar-item w3-button' href='../cert/cert_javascript_en.html' target='_top'>JavaScript Certificate</a>
                    <a class='w3-bar-item w3-button' href='../cert/cert_sql_en.html' target='_top'>SQL Certificate</a>
                    <a class='w3-bar-item w3-button' href='../cert/cert_php_en.html' target='_top'>PHP Certificate</a>
                    <a class='w3-bar-item w3-button' href='../cert/cert_python_en.html' target='_top'>Python Certificate</a>
                    <a class='w3-bar-item w3-button' href='../cert/cert_jquery_en.html' target='_top'>jQuery Certificate</a>
                    <a class='w3-bar-item w3-button' href='../cert/cert_bootstrap_en.html' target='_top'>Bootstrap Certificate</a>
                    <a class='w3-bar-item w3-button' href='../cert/cert_xml_en.html' target='_top'>XML Certificate</a>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<!--/Top menu--><!--Left menu sidebar-->
<div class='w3-sidebar w3-collapse' id='sidenav'>
    <div id='leftmenuinner'>
        <div id='leftmenuinnerinner' style='background-color:#E7E9EB;'>
            <h2 class='left'>JS Tutorial</h2>
            <a target='_top' href='index_en.html'>JS HOME</a>
            <a target='_top' href='js_intro_en.html'>JS Introduction</a>
            <a target='_top' href='js_whereto_en.html'>JS Where To</a>
            <a target='_top' href='js_output_en.html'>JS Output</a>
            <a target='_top' href='js_statements_en.html'>JS Statements</a>
            <a target='_top' href='js_syntax_en.html'>JS Syntax</a>
            <a target='_top' href='js_comments_en.html'>JS Comments</a>
            <a target='_top' href='js_variables_en.html'>JS Variables</a>
            <a target='_top' href='js_let_en.html'>JS Let</a>
            <a target='_top' href='js_const_en.html'>JS Const</a>
            <a target='_top' href='js_operators_en.html'>JS Operators</a>
            <a target='_top' href='js_arithmetic_en.html'>JS Arithmetic</a>
            <a target='_top' href='js_assignment_en.html'>JS Assignment</a>
            <a target='_top' href='js_datatypes_en.html'>JS Data Types</a>
            <a target='_top' href='js_functions_en.html'>JS Functions</a>
            <a target='_top' href='js_objects_en.html'>JS Objects</a>
            <a target='_top' href='js_events_en.html'>JS Events</a>
            <a target='_top' href='js_strings_en.html'>JS Strings</a>
            <a target='_top' href='js_string_methods_en.html'>JS String Methods</a>
            <a target='_top' href='js_string_search_en.html'>JS String Search</a>
            <a target='_top' href='js_string_templates_en.html'>JS String Templates</a>
            <a target='_top' href='js_numbers_en.html'>JS Numbers</a>
            <a target='_top' href='js_number_methods_en.html'>JS Number Methods</a>
            <a target='_top' href='js_arrays_en.html'>JS Arrays</a>
            <a target='_top' href='js_array_methods_en.html'>JS Array Methods</a>
            <a target='_top' href='js_array_sort_en.html'>JS Array Sort</a>
            <a target='_top' href='js_array_iteration_en.html'>JS Array Iteration</a>
            <a target='_top' href='js_array_const_en.html'>JS Array Const</a>
            <a target='_top' href='js_dates_en.html'>JS Dates</a>
            <a target='_top' href='js_date_formats_en.html'>JS Date Formats</a>
            <a target='_top' href='js_date_methods_en.html'>JS Date Get Methods</a>
            <a target='_top' href='js_date_methods_set_en.html'>JS Date Set Methods</a>
            <a target='_top' href='js_math_en.html'>JS Math</a>
            <a target='_top' href='js_random_en.html'>JS Random</a>
            <a target='_top' href='js_booleans_en.html'>JS Booleans</a>
            <a target='_top' href='js_comparisons_en.html'>JS Comparisons</a>
            <a target='_top' href='js_if_else_en.html'>JS If Else</a>
            <a target='_top' href='js_switch_en.html'>JS Switch</a>
            <a target='_top' href='js_loop_for_en.html'>JS Loop For</a>
            <a target='_top' href='js_loop_forin_en.html'>JS Loop For In</a>
            <a target='_top' href='js_loop_forof_en.html'>JS Loop For Of</a>
            <a target='_top' href='js_loop_while_en.html'>JS Loop While</a>
            <a target='_top' href='js_break_en.html'>JS Break</a>
            <a target='_top' href='js_iterables_en.html'>JS Iterables</a>
            <a target='_top' href='js_sets_en.html'>JS Sets</a>
            <a target='_top' href='js_maps_en.html'>JS Maps</a>
            <a target='_top' href='js_typeof_en.html'>JS Typeof</a>
            <a target='_top' href='js_type_conversion_en.html'>JS Type Conversion</a>
            <a target='_top' href='js_bitwise_en.html'>JS Bitwise</a>
            <a target='_top' href='js_regexp_en.html'>JS RegExp</a>
            <a target='_top' href='js_errors_en.html'>JS Errors</a>
            <a target='_top' href='js_scope_en.html'>JS Scope</a>
            <a target='_top' href='js_hoisting_en.html'>JS Hoisting</a>
            <a target='_top' href='js_strict_en.html'>JS Strict Mode</a>
            <a target='_top' href='js_this_en.html'>JS this Keyword</a>
            <a target='_top' href='js_arrow_function_en.html'>JS Arrow Function</a>
            <a target='_top' href='js_classes_en.html'>JS Classes</a>
            <a target='_top' href='js_modules_en.html'>JS Modules</a>
            <a target='_top' href='js_json_en.html'>JS JSON</a>
            <a target='_top' href='js_debugging_en.html'>JS Debugging</a>
            <a target='_top' href='js_conventions_en.html'>JS Style Guide</a>
            <a target='_top' href='js_best_practices_en.html'>JS Best Practices</a>
            <a target='_top' href='js_mistakes_en.html'>JS Mistakes</a>
            <a target='_top' href='js_performance_en.html'>JS Performance</a>
            <a target='_top' href='js_reserved_en.html'>JS Reserved Words</a>
            <br>
            <h2 class='left'>JS Versions</h2>
            <a target='_top' href='js_versions_en.html'>JS Versions</a>
            <a target='_top' href='js_es5_en.html'>JS 2009 (ES5)</a>
            <a target='_top' href='js_es6_en.html'>JS 2015 (ES6)</a>
            <a target='_top' href='js_2016_en.html'>JS 2016</a>
            <a target='_top' href='js_2017_en.html'>JS 2017</a>
            <a target='_top' href='js_2018_en.html'>JS 2018</a>
            <a target='_top' href='js_ie_edge_en.html'>JS IE / Edge</a>
            <a target='_top' href='js_history_en.html'>JS History</a>
            <br>
            <h2 class='left'>JS Objects</h2>
            <a target='_top' href='js_object_definition_en.html'>Object Definitions</a>
            <a target='_top' href='js_object_properties_en.html'>Object Properties</a>
            <a target='_top' href='js_object_methods_en.html'>Object Methods</a>
            <a target='_top' href='js_object_display_en.html'>Object Display</a>
            <a target='_top' href='js_object_accessors_en.html'>Object Accessors</a>
            <a target='_top' href='js_object_constructors_en.html'>Object Constructors</a>
            <a target='_top' href='js_object_prototypes_en.html'>Object Prototypes</a>
            <a target='_top' href='js_object_iterables_en.html'>Object Iterables</a>
            <a target='_top' href='js_object_sets_en.html'>Object Sets</a>
            <a target='_top' href='js_object_maps_en.html'>Object Maps</a>
            <a target='_top' href='js_object_es5_en.html'>Object Reference</a>
            <br>
            <h2 class='left'>JS Functions</h2>
            <a target='_top' href='js_function_definition_en.html'>Function Definitions</a>
            <a target='_top' href='js_function_parameters_en.html'>Function Parameters</a>
            <a target='_top' href='js_function_invocation_en.html'>Function Invocation</a>
            <a target='_top' href='js_function_call_en.html'>Function Call</a>
            <a target='_top' href='js_function_apply_en.html'>Function Apply</a>
            <a target='_top' href='js_function_bind_en.html'>Function Bind</a>
            <a target='_top' href='js_function_closures_en.html'>Function Closures</a>
            <br>
            <h2 class='left'>JS Classes</h2>
            <a target='_top' href='js_class_intro_en.html'>Class Intro</a>
            <a target='_top' href='js_class_inheritance_en.html'>Class Inheritance</a>
            <a target='_top' href='js_class_static_en.html'>Class Static</a>
            <br>
            <h2 class='left'>JS Async</h2>
            <a target='_top' href='js_callback_en.html'>JS Callbacks</a>
            <a target='_top' href='js_asynchronous_en.html'>JS Asynchronous</a>
            <a target='_top' href='js_promise_en.html'>JS Promises</a>
            <a target='_top' href='js_async_en.html'>JS Async/Await</a>
            <br>
            <h2 class='left'>JS HTML DOM</h2>
            <a target='_top' href='js_htmldom_en.html'>DOM Intro</a>
            <a target='_top' href='js_htmldom_methods_en.html'>DOM Methods</a>
            <a target='_top' href='js_htmldom_document_en.html'>DOM Document</a>
            <a target='_top' href='js_htmldom_elements_en.html'>DOM Elements</a>
            <a target='_top' href='js_htmldom_html_en.html'>DOM HTML</a>
            <a target='_top' href='js_validation_en.html'>DOM Forms</a>
            <a target='_top' href='js_htmldom_css_en.html'>DOM CSS</a>
            <a target='_top' href='js_htmldom_animate_en.html'>DOM Animations</a>
            <a target='_top' href='js_htmldom_events_en.html'>DOM Events</a>
            <a target='_top' href='js_htmldom_eventlistener_en.html'>DOM Event Listener</a>
            <a target='_top' href='js_htmldom_navigation_en.html'>DOM Navigation</a>
            <a target='_top' href='js_htmldom_nodes_en.html'>DOM Nodes</a>
            <a target='_top' href='js_htmldom_collections_en.html'>DOM Collections</a>
            <a target='_top' href='js_htmldom_nodelist_en.html'>DOM Node Lists</a>
            <br>
            <h2 class='left'>JS Browser BOM</h2>
            <a target='_top' href='js_window_en.html'>JS Window</a>
            <a target='_top' href='js_window_screen_en.html'>JS Screen</a>
            <a target='_top' href='js_window_location_en.html'>JS Location</a>
            <a target='_top' href='js_window_history_en.html'>JS History</a>
            <a target='_top' href='js_window_navigator_en.html'>JS Navigator</a>
            <a target='_top' href='js_popup_en.html'>JS Popup Alert</a>
            <a target='_top' href='js_timing_en.html'>JS Timing</a>
            <a target='_top' href='js_cookies_en.html'>JS Cookies</a>
            <br>
            <h2 class='left'>JS Web APIs</h2>
            <a target='_top' href='js_api_intro_en.html'>Web API Intro</a>
            <a target='_top' href='js_validation_api_en.html'>Web Forms API</a>
            <a target='_top' href='js_api_history_en.html'>Web History API</a>
            <a target='_top' href='js_api_web_storage_en.html'>Web Storage API</a>
            <a target='_top' href='js_api_web_workers_en.html'>Web Worker API</a>
            <a target='_top' href='js_api_fetch_en.html'>Web Fetch API</a>
            <a target='_top' href='js_api_geolocation_en.html'>Web Geolocation API</a>
            <br>
            <h2 class='left'>JS AJAX</h2>
            <a target='_top' href='js_ajax_intro_en.html'>AJAX Intro</a>
            <a target='_top' href='js_ajax_http_en.html'>AJAX XMLHttp</a>
            <a target='_top' href='js_ajax_http_send_en.html'>AJAX Request</a>
            <a target='_top' href='js_ajax_http_response_en.html'>AJAX Response</a>
            <a target='_top' href='js_ajax_xmlfile_en.html'>AJAX XML File</a>
            <a target='_top' href='js_ajax_php_en.html'>AJAX PHP</a>
            <a target='_top' href='js_ajax_asp_en.html'>AJAX ASP</a>
            <a target='_top' href='js_ajax_database_en.html'>AJAX Database</a>
            <a target='_top' href='js_ajax_applications_en.html'>AJAX Applications</a>
            <a target='_top' href='js_ajax_examples_en.html'>AJAX Examples</a>
            <br>
            <h2 class='left'>JS JSON</h2>
            <a target='_top' href='js_json_intro_en.html'>JSON Intro</a>
            <a target='_top' href='js_json_syntax_en.html'>JSON Syntax</a>
            <a target='_top' href='js_json_xml_en.html'>JSON vs XML</a>
            <a target='_top' href='js_json_datatypes_en.html'>JSON Data Types</a>
            <a target='_top' href='js_json_parse_en.html'>JSON Parse</a>
            <a target='_top' href='js_json_stringify_en.html'>JSON Stringify</a>
            <a target='_top' href='js_json_objects_en.html'>JSON Objects</a>
            <a target='_top' href='js_json_arrays_en.html'>JSON Arrays</a>
            <a target='_top' href='js_json_server_en.html'>JSON Server</a>
            <a target='_top' href='js_json_php_en.html'>JSON PHP</a>
            <a target='_top' href='js_json_html_en.html'>JSON HTML</a>
            <a target='_top' href='js_json_jsonp_en.html'>JSON JSONP</a>
            <br>
            <h2 class='left'>JS vs jQuery</h2>
            <a target='_top' href='js_jquery_selectors_en.html'>jQuery Selectors</a>
            <a target='_top' href='js_jquery_elements_en.html'>jQuery HTML</a>
            <a target='_top' href='js_jquery_css_en.html'>jQuery CSS</a>
            <a target='_top' href='js_jquery_dom_en.html'>jQuery DOM</a>
            <br>
            <h2 class='left'>JS Graphics</h2>
            <a target='_top' href='js_graphics_en.html'>JS Graphics</a>
            <a target='_top' href='js_graphics_canvas_en.html'>JS Canvas</a>
            <a target='_top' href='js_graphics_plotly_en.html'>JS Plotly</a>
            <a target='_top' href='js_graphics_chartjs_en.html'>JS Chart.js</a>
            <a target='_top' href='js_graphics_google_chart_en.html'>JS Google Chart</a>
            <a target='_top' href='js_graphics_d3js_en.html'>JS D3.js</a>
            <br>
            <h2 class='left'>JS Examples</h2>
            <a target='_top' href='js_examples_en.html'>JS Examples</a>
            <a target='_top' href='js_dom_examples_en.html'>JS HTML DOM</a>
            <a target='_top' href='js_input_examples_en.html'>JS HTML Input</a>
            <a target='_top' href='js_ex_dom_en.html'>JS HTML Objects</a>
            <a target='_top' href='js_events_examples_en.html'>JS HTML Events</a>
            <a target='_top' href='js_ex_browser_en.html'>JS Browser</a>
            <a target='_top' href='js_editor_en.html'>JS Editor</a>
            <a target='_top' href='js_exercises_en.html'>JS Exercises</a>
            <a target='_top' href='js_quiz_en.html'>JS Quiz</a>
            <a target='_top' href='js_exam_en.html'>JS Certificate</a>
            <br>
            <h2 class='left'>JS References</h2>
            <a target='_top' href='../jsref/index_en.html'>JavaScript Objects</a>
            <a target='_top' href='../jsref/index_en.html'>HTML DOM Objects</a>
            <br><br>
        </div>
    </div>
</div>
<!--/Left menu sidebar--><!--CONTENT JS-->
<div class='w3-main w3-light-grey' id='belowtopnav' style='margin-left:220px;'>
    <div class='w3-row w3-white'>
        <div class='w3-col l10 m12' id='main'>
          <div class="adver_adup">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6358227327561384" crossorigin="anonymous"></script>
    <!-- adup_gorizontal -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6358227327561384" data-ad-slot="5050829044" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>
            <a href='index_en.html'><img src='../svg/js.svg' alt='JavaScript. W3Schools in English. Lessons for beginners' class='w3-left w3-padding' title='JavaScript for beginners. W3Schools in English' style='width: 120px'></a>
<p class='w3-right'>
    <a href='js_function_call.html' title='Go to Ukrainian language'>Ua</a>
</p>
<article>
    <h1>JavaScript Function call()</h1>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_function_invocation_en.html">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_function_apply_en.html">Next &#10095;</a>
    </div>
    <hr>
    <h2>Method Reuse</h2>
    <p>With the <code class="w3-codespan">call()</code> method, you can write a method that can be used on different objects.</p>
    <hr>
    <h2>All Functions are Methods</h2>
    <p>In JavaScript all functions are object methods.</p>
    <p>If a function is not a method of a JavaScript object, it is a function of the global object (see previous chapter).</p>
    <p>The example below creates an object with 3 properties, firstName, lastName, fullName.</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>&nbsp;&nbsp;firstName:&quot;John&quot;,<br>&nbsp;&nbsp;lastName: &quot;Doe&quot;,<br>&nbsp; fullName: function () {<br>
            &nbsp;&nbsp;&nbsp; return this.firstName + &quot; &quot; + this.lastName;<br>&nbsp;&nbsp;}<br>}<br><br>// This will return &quot;John Doe&quot;:<br>person.fullName();&nbsp;&nbsp;
        </div>
        <a class="w3-btn w3-margin-bottom" href="../jstryit/tryjs_function_call_method.html" target="_blank">Try it Yourself &raquo;</a>
    </div>
    <p>In the example above, <code class="w3-codespan">this</code> refers to the <strong>person object</strong>.</p>
    <p><strong>this.firstName</strong> means the <strong>firstName</strong> property of <strong>this</strong>.</p>
    <p>Same as:</p>
    <p><strong>this.firstName</strong> means the <strong>firstName</strong> property of <strong>person</strong>.</p>
    <hr>
    <h2>What is <b>this</b>?</h2>
    <p>In JavaScript, the <code class="w3-codespan">this</code> keyword refers to an <b>object</b>.</p>
    <p><b>Which</b> object depends on how <code class="w3-codespan">this</code> is being invoked (used or called).</p>
    <p>The <code class="w3-codespan">this</code> keyword refers to different objects depending on how it is used:</p>
    <table class="ws-table-all">
        <tr><td>In an object method, <code class="w3-codespan">this</code> refers to the <b>object</b>.</td></tr>
        <tr><td>Alone, <code class="w3-codespan">this</code> refers to the <b>global object</b>.</td></tr>
        <tr><td>In a function, <code class="w3-codespan">this</code> refers to the <b>global object</b>.</td></tr>
        <tr><td>In a function, in strict mode, <code class="w3-codespan">this</code> is <code class="w3-codespan">undefined</code>.</td></tr>
        <tr><td>In an event, <code class="w3-codespan">this</code> refers to the <b>element</b> that received the event.</td></tr>
        <tr><td>Methods like <code class="w3-codespan">call()</code>, <code class="w3-codespan">apply()</code>, and <code class="w3-codespan">bind()</code> can refer <code class="w3-codespan">this</code> to <b>any object</b>.</td></tr>
    </table>
    <div class="w3-note">
        <h2>Note</h2>
        <code class="w3-codespan">this</code> is not a variable. It is a keyword. You cannot change the value of <code class="w3-codespan">this</code>.
        <h2>See Also:</h2>
        <p><a href="js_this_en.html">The JavaScript <b>this</b> Tutorial</a></p>
    </div>
    <hr>
    <div class="adver_adinfeed">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6358227327561384" crossorigin="anonymous"></script>
    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-5o+cq-k-pl+1ar" data-ad-client="ca-pub-6358227327561384" data-ad-slot="2302652563"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>    <h2>The JavaScript call() Method</h2>
    <p>The <code class="w3-codespan">call()</code> method is a predefined JavaScript method.</p>
    <p>It can be used to invoke (call) a method with an owner object as an argument (parameter).</p>
    <div class="w3-panel w3-note">
        <p>With <code class="w3-codespan">call()</code>, an object can use a method belonging to another object.</p>
    </div>
    <p>This example calls the <strong>fullName</strong> method of person, using it on <strong>person1</strong>:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>&nbsp;&nbsp;<strong>fullName</strong>: function() {<br>&nbsp;&nbsp;&nbsp;&nbsp;return this.firstName + &quot; &quot; + this.lastName;<br>&nbsp;&nbsp;}<br>}<br>const person1 = {<br>&nbsp;&nbsp;firstName:&quot;John&quot;,<br>&nbsp; lastName: &quot;Doe&quot;<br>}<br>const person2 = {<br>&nbsp; firstName:&quot;Mary&quot;,<br>&nbsp; lastName: &quot;Doe&quot;<br>}<br><br>// This will return &quot;John Doe&quot;:<br>person.fullName.call(<strong>person1</strong>);
        </div>
        <a class="w3-btn" href="../jstryit/tryjs_function_call_call.html" target="_blank">Try it Yourself &raquo;</a>
    </div>
    <p>This example calls the <strong>fullName</strong> method of person, using it on <strong>person2</strong>:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>&nbsp; <strong>fullName</strong>: function() {<br>&nbsp;&nbsp;&nbsp; return this.firstName + &quot; &quot; + this.lastName;<br>&nbsp;&nbsp;}<br>}<br>const person1 = {<br>&nbsp;&nbsp;firstName:&quot;John&quot;,<br>&nbsp; lastName: &quot;Doe&quot;<br>}<br>const person2 = {<br>&nbsp; firstName:&quot;Mary&quot;,<br>&nbsp; lastName: &quot;Doe&quot;<br>}<br><br>// This will return &quot;Mary Doe&quot;<br>person.fullName.call(<strong>person2</strong>);
        </div>
        <a class="w3-btn" href="../jstryit/tryjs_function_call_call2.html" target="_blank">Try it Yourself &raquo;</a>
    </div>
    <h2>The call() Method with Arguments</h2>
    <p>The <code class="w3-codespan">call()</code> method can accept arguments:</p>
    <div class="w3-example">
        <h3>Example</h3>
        <div class="w3-code notranslate jsHigh">
            const person = {<br>&nbsp; fullName: function(city, country) {<br>&nbsp;&nbsp;&nbsp; return this.firstName + &quot; &quot; + this.lastName + "," + city + "," + country;<br>&nbsp; }<br>}<br><br>const person1 = {<br>&nbsp;&nbsp;firstName:&quot;John&quot;,<br>&nbsp;&nbsp;lastName: &quot;Doe&quot;<br>}<br><br>person.fullName.call(person1, "Oslo", "Norway");
        </div>
        <a class="w3-btn" href="../jstryit/tryjs_function_call_arguments.html" target="_blank">Try it Yourself &raquo;</a>
    </div>
    <hr>
    <div class="w3-clear nextprev">
        <a class="w3-left w3-btn" href="js_function_invocation_en.html">&#10094; Prev</a>
        <a class="w3-right w3-btn" href="js_function_apply_en.html">Next &#10095;</a>
    </div>
</article>
<div class="adver_addown">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6358227327561384" crossorigin="anonymous"></script>
    <!-- addown_gorizontal -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6358227327561384" data-ad-slot="7281891662" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>
</div>
<!--Right sidebar-->
<div class='w3-col l2 m12' id='right'>
    <div class='sidesection w3-light-gray' style='padding-bottom: 5px'>
        <h4><a href='../colors/colors_picker_en.html'>COLOR PICKER</a></h4>
        <a href='../colors/colors_picker_en.html'><img src='../images/colorpicker.gif' alt='colorpicker'></a>
    </div>
    <div class='sidesection'>
        <h4>SUBSCRIBE!</h4>
        <div class='w3-text-grey sharethis'>
            <a href='https://www.facebook.com/groups/900220404063356' target='_blank'><img src='../svg/facebook_icon.svg' alt='Facebook W3Schools Rus' title='Facebook page' style='width:35px; height:35px'></a>
            <a href='https://www.youtube.com/channel/UCHMtoMp4TyUG_fN3G-8zHXg' target='_blank'><img src='../svg/youtube_icon.svg' alt='YouTube-channel W3Schools Rus' title='1th YouTube-channel' style='width:35px; height:35px'></a>
            <a href='https://t.me/websunsey' target='_blank'><img src='../svg/telegram_icon.svg' alt='Telegram-channel' title='Telegram-channel' style='width:35px;height:35px'></a>
            <a href='https://www.youtube.com/channel/UCMiY03HY_PubvnRZoVu66tA' target='_blank'><img src='../svg/youtube_icon2.svg' alt='YouTube-channel W3Schools Rus' title='2th YouTube-channel' style='width:60px; height:30px'></a>
        </div>
    </div>
  <div class='sidesection' style='margin-left:auto;margin-right:auto;max-width:230px;background:#eee'>Place for your advertisement!</div>
<div class="adver2">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6358227327561384" crossorigin="anonymous"></script>
    <!-- admedia_vertical_rightbar -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6358227327561384" data-ad-slot="1902033594" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>
<div class="adver3">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6358227327561384" crossorigin="anonymous"></script>
    <!-- admedia_vertical_rightbar2 -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6358227327561384" data-ad-slot="7441711750" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div></div>
<!--/Right sidebar-->
</div><!--FOOTER-->
<div id='footer' class='footer w3-container w3-white'>
  <hr>

  <div class='w3-row-padding w3-center w3-small' style='margin:0 -16px'>
    <div class='w3-col l3 m3 s12'>
      <a class='w3-button w3-light-grey w3-block' href='javascript:void(0);' onclick='displayError();return false' style='white-space:nowrap;text-decoration:none;margin-top:1px;margin-bottom:1px'>CONTACTS</a>
    </div>
    <div class='w3-col l3 m3 s12'>
      <a class='w3-button w3-light-grey w3-block' href='javascript:void(0);' target='_blank' onclick='printPage();return false;' style='text-decoration:none;margin-top:1px;margin-bottom:1px'>PRINT PAGE</a>
    </div>
    <div class='w3-col l3 m3 s12'>
      <a class='w3-button w3-light-grey w3-block' href='../blog/index.html' target='_top' style='text-decoration:none;margin-top:1px;margin-bottom:1px'>BLOG</a>
    </div>
    <div class='w3-col l3 m3 s12'>
      <a class='w3-button w3-light-grey w3-block' href='../about/index_en.html' target='_top' style='text-decoration:none;margin-top:1px;margin-bottom:1px'>ABOUT</a>
    </div>
  </div>
  <hr>
  <div class='w3-padding w3-margin-bottom' id='err_form' style='display:none;position:relative;background-color: #DDE7EA;'>
    <span onclick="this.parentElement.style.display='none'" class='w3-button w3-display-topright w3-large'>&times;</span>
      <h2>Contacts</h2>
      <p>If you want to report a bug, as well as make an offer for the site, add an ad or advertisement on the site, do not hesitate to send an email to the admin:</p>
      <p>w3schoolsua@gmail.com</p>
  </div>
  <div class='w3-row w3-center w3-small'>
    <div class='w3-col l3 m6 s12'>
      <div class='top10'>
        <h4>Top Tutorial</h4>
        <a href='../html/index_en.html'>HTML Tutorial</a><br>
        <a href='../css/index_en.html'>CSS Tutorial</a><br>
        <a href='../js/index_en.html'>JavaScript Tutorial</a><br>
        <a href='../sql/index_en.html'>SQL Tutorial</a><br>
        <a href='../python/index_en.html'>Python Tutorial</a><br>
        <a href='../php/index_en.html'>PHP Tutorial</a><br>
        <a href='../bootstrap/bootstrap_ver_en.html'>Bootstrap Tutorial</a><br>
        <a href='../w3css/index_en.html'>W3.CSS Tutorial</a><br>
        <a href='../appml/index_en.html'>AppML Tutorial</a><br>
        <a href='../jquery/index_en.html'>jQuery Tutorial</a><br>
        <a href='../angular/index_en.html'>Angular Tutorial</a><br>
        <a href='../sass/index_en.html'>Sass Tutorial</a><br>
        <a href='../java/index_en.html'>Java Tutorial</a><br>
        <a href='../cpp/index_en.html'>C++ Tutorial</a><br>
        <a href='../cs/index_en.html'>C# Tutorial</a><br>
      </div>
    </div>
    <div class='w3-col l3 m6 s12'>
      <div class='top10'>
        <h4>Top References</h4>
        <a href='../tags/index_en.html'>HTML Reference</a><br>
        <a href='../cssref/index_en.html'>CSS Reference</a><br>
        <a href='../jsref/index_en.html'>JavaScript Reference</a><br>
        <a href='../sql/sql_ref_keywords_en.html'>SQL Reference</a><br>
        <a href='../python/python_reference_en.html'>Python Reference</a><br>
        <a href='../php/php_ref_overview_en.html'>PHP Reference</a><br>
        <a href='../bootstrap/bootstrap_ref_all_classes_en.html'>Bootstrap 3 Reference</a><br>
        <a href='../bootstrap4/bootstrap_ref_all_classes_en.html'>Bootstrap 4 Reference</a><br>
        <a href='../w3css/w3css_references_en.html'>W3.CSS Reference</a><br>
        <a href='../appml/appml_reference_en.html'>Appml Reference</a><br>
        <a href='../jquery/jquery_ref_overview_en.html'>jQuery Reference</a><br>
        <a href='../angular/angular_ref_directives_en.html'>Angular Reference</a><br>
        <a href='../sass/sass_functions_string_en.html'>Sass Reference</a><br>
        <a href='../java/java_ref_keywords_en.html'>Java Reference</a><br>
        <a href='../colors/colors_names_en.html'>Colors Reference</a><br>
      </div>
    </div>
    <div class='w3-col l3 m6 s12'>
      <div class='top10'>
        <h4>Top Examples</h4>
        <a href='../html/html_examples_en.html'>HTML Examples</a><br>
        <a href='../css/css_examples_en.html'>CSS Examples</a><br>
        <a href='../js/js_examples_en.html'>JavaScript Examples</a><br>
        <a href='../sql/sql_examples_en.html'>SQL Examples</a><br>
        <a href='../python/python_examples_en.html'>Python Examples</a><br>
        <a href='../php/php_examples_en.html'>PHP Examples</a><br>
        <a href='../bootstrap/bootstrap_examples_en.html'>Bootstrap Examples</a><br>
        <a href='../w3css/w3css_examples_en.html'>W3.CSS Examples</a><br>
        <a href='../jquery/jquery_examples_en.html'>jQuery Examples</a><br>
        <a href='../angular/angular_examples_en.html'>Angular Examples</a><br>
        <a href='../java/java_examples_en.html'>Java Examples</a><br>
        <a href='../cpp/cpp_examples_en.html'>C++ Examples</a><br>
        <a href='../cs/cs_examples_en.html'>C# Examples</a><br>
        <a href='../xml/xml_examples_en.html'>XML Examples</a><br>
        <a href='../howto/index_en.html'>How To Examples</a><br>
      </div>
    </div>
    <div class='w3-col l3 m6 s12'>
      <div class='top10'>
        <h4><a href='../cert/index_en.html'>Web Certificates</a></h4>
        <a href='../cert/cert_html_en.html'>HTML Certificate</a><br>
        <a href='../cert/cert_css_en.html'>CSS Certificate</a><br>
        <a href='../cert/cert_javascript_en.html'>JavaScript Certificate</a><br>
        <a href='../cert/cert_frontend_en.html'>Front End Certificate</a><br>
        <a href='../cert/cert_python_en.html'>Python Certificate</a><br>
        <a href='../cert/cert_datascience_en.html'>Data Science Certificate</a><br>
        <a href='../cert/cert_jquery_en.html'>jQuery Certificate</a><br>
        <a href='../cert/cert_sql_en.html'>SQL Certificate</a><br>
        <a href='../cert/cert_php_en.html'>PHP Certificate</a><br>
        <a href='../cert/cert_java_en.html'>Java Certificate</a><br>
        <a href='../cert/cert_bootstrap_en.html'>Bootstrap Certificate</a><br>
        <a href='../cert/cert_xml_en.html'>XML Certificate</a><br>
        <a href='../cert/career_tips_en.html'>Career planning</a><br>
        <a href='../cert/career_cv_en.html'>Writing a resume</a><br>
      </div>
    </div>
  </div>
  <hr>
  <div class='w3-center w3-small w3-opacity'>This site is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our <a href='../about/about_copyright_en.html'>terms of use</a>, <a href='../about/about_privacy_en.html'>cookie and privacy policy</a>.<br>
You can also use the Ukrainian version of the site <a href='../index.html'><strong>W3Schools українською</strong></a>.<br>
    <a href='../about/about_copyright_en.html'>Copyright 1999-2024</a> by Refsnes Data. All Rights Reserved.<br>
    <a href='../w3css/index_en.html'>W3Schools is Powered by W3.CSS</a>.<br><br>
    <a href='../index_en.html'><img style='width:150px;height:28px;border:0' src='../images/w3schoolscom_gray.gif' alt='W3Schools.com'></a>
  </div>
  <br><br>
    <div class="adver_adfooter">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6358227327561384" crossorigin="anonymous"></script>
    <!-- addown_gorizontal -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6358227327561384" data-ad-slot="7281891662" data-ad-format="auto" data-full-width-responsive="true"></ins>
    <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
</div>
</div>
</div>
<script src='../lib/w3schools_footer.js'></script>
<!--[if lt IE 9]>
<script src='../cdn/html5shiv/3.7.3/html5shiv.js'></script>
<script src='../cdn/respond/1.4.2/respond.min.js'></script>
<![endif]-->
<!--FOOTER-->
</html>