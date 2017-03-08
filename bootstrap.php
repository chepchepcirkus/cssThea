<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-language" content="fr-FR" />
    <meta name="keywords" content="bootstrap css, framework css, cssthea, codythea.com"/>
    <title>cssThea</title>
    <meta name="robots" content="INDEX, FOLLOW"/>
    <link rel="stylesheet" href="css/cssthea.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <script src="js/jquery-2.2.3-min.js"></script>
    <script src="js/main.js"></script>
    <script src="node_modules/clipboard/dist/clipboard.min.js"></script>
</head>
<body>
<script type=text/javascript>
    var clipboard = new Clipboard('.btn-copy-code');
    clipboard.on('success', function(e) {
        var event = new CustomEvent('cssThea.flash-message', {detail: [{dataset: {'class':'bg-greenthea-light', 'text': 'Copied !'}}]});
        window.dispatchEvent(event);
    });
    clipboard.on('error', function(e) {
        var event = new CustomEvent('cssThea.flash-message', {detail: [{dataset: {'class':'bg-red-light', 'text': 'Error on copy...'}}]});
        window.dispatchEvent(event);
    });
</script>
<header>
    <h1><i class="fa fa-coffee"></i> cssThea <small>light taste</small></h1>
    <a href="#" class="open-menu-trigger" id="open-menu-trigger">
        <i class="fa fa-bars fa-3x"></i>
    </a>
    <nav>
        <a href="#" id="close-menu-trigger"><i class="fa fa-close fa-2x"></i></a>
        <a href="#usefull-classes" title="Usefull Classes">Usefull classes</a>
        <a href="#grid" title="Grid">Grid</a>
        <a href="#time-line" title="Time line">Time line</a>
        <a href="#bar" title="Barre">Barre</a>
        <a href="#background-color" title="Background color">Background Color</a>
        <a href="#buttons" title="Buttons">Buttons</a>
        <a href="#flash-message" title="Flash message">Flash message</a>
        <a href="#tabs" title="Tabs">Tabs</a>
        <a href="http://www.codythea.com"><i class="fa fa-coffee"></i> codythea.com</a>
    </nav>
</header>
<main>
    <div class="flash-message-container"></div>
    <p class="a-center">cssThea is a simple UI Kit for your application, <br/> feel free to <br/>fork, share and customize, <br/>enjoy <a href="https://github.com/chepchepcirkus/cssThea"><i class="fa fa-github"></i> cssThea</a><br/> Any feed back or contribution will be appreciated.</p>
    <div class="cont">
        <h2 id="usefull-classes">Usefull classes</h2>
        <div class="w-5">
            <p class="a-center">ALIGNEMENT</p>
            <p class="a-left">class : a-left</p>
            <p class="a-center">class : a-center</p>
            <p class="a-right">class : a-right</p>
        </div>
    </div>
    <div class="cont">
        <h2 id="grid">Grid</h2>
        <div class="w-10 bg-grey-light a-center">10</div>
        <div class="w-9 bg-grey-light a-center">9</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-8 bg-grey-light a-center">8</div>
        <div class="w-2 bg-grey-light a-center">2</div>
        <div class="w-7 bg-grey-light a-center">7</div>
        <div class="w-3 bg-grey-light a-center">3</div>
        <div class="w-6 bg-grey-light a-center">6</div>
        <div class="w-4 bg-grey-light a-center">4</div>
        <div class="w-5 bg-grey-light a-center">5</div>
        <div class="w-5 bg-grey-light a-center">5</div>
        <div class="w-4 bg-grey-light a-center">4</div>
        <div class="w-4 bg-grey-light a-center">4</div>
        <div class="w-2 bg-grey-light a-center">2</div>
        <div class="w-3 bg-grey-light a-center">3</div>
        <div class="w-3 bg-grey-light a-center">3</div>
        <div class="w-3 bg-grey-light a-center">3</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-2 bg-grey-light a-center">2</div>
        <div class="w-2 bg-grey-light a-center">2</div>
        <div class="w-2 bg-grey-light a-center">2</div>
        <div class="w-2 bg-grey-light a-center">2</div>
        <div class="w-2 bg-grey-light a-center">2</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-10">
            <p>Html :
                <button class="btn-copy-code button" data-clipboard-target="#grid-code">
                    <i class="fa fa-copy"></i>
                </button>
            </p>
            <code type="html">
                <pre id="grid-code">
                <?php
                $code = '
<div class="w-1 bg-grey"></div>
';
                echo htmlspecialchars($code);
                ?>
                </pre>
            </code>
        </div>
    </div>
    <div class="cont">
        <h3 id="time-line">Time line</h3>
        <div class="w-5">
            <ul class="time-line">
                <li><span></span>20017/2016</li>
                <li><span></span>2005/2016</li>
                <li><span></span>2004/2005</li>
            </ul>
        </div>
        <div class="w-5">
            <p>Html :
                <button class="btn-copy-code button" data-clipboard-target="#time-line-code">
                    <i class="fa fa-copy"></i>
                </button>
            </p>
            <code type="html">
                <pre id="time-line-code">
                <?php
                $code = '
<ul class="time-line">
    <li><span></span>20017/2016</li>
    <li><span></span>2005/2016</li>
    <li><span></span>2004/2005</li>
</ul>
';
                echo htmlspecialchars($code);
                ?>
                </pre>
            </code>
        </div>
    </div>
    <div class="cont">
        <h3 id="bar">Bar</h3>
        <div class="w-5">
            <p><span class="rate-wrapper"><span class="rate"></span></span></p>
            <p><span class="rate-wrapper"><span class="rate rate-90"></span></span></p>
            <p><span class="rate-wrapper"><span class="rate rate-80"></span></span></p>
            <p><span class="rate-wrapper"><span class="rate rate-70"></span></span></p>
            <p><span class="rate-wrapper"><span class="rate rate-60"></span></span></p>
            <p><span class="rate-wrapper"><span class="rate rate-50"></span></span></p>
            <p><span class="rate-wrapper"><span class="rate rate-40"></span></span></p>
            <p><span class="rate-wrapper"><span class="rate rate-30"></span></span></p>
            <p><span class="rate-wrapper"><span class="rate rate-20"></span></span></p>
            <p><span class="rate-wrapper"><span class="rate rate-10"></span></span></p>
            <p><span class="rate-wrapper"><span class="rate rate-0"></span></span></p>
        </div>
        <div class="w-5">
            <p>Html :
                <button class="btn-copy-code button" data-clipboard-target="#bar-code">
                    <i class="fa fa-copy"></i>
                </button>
            </p>
            <code type="html">
            <pre id="bar-code">
            <?php
            $code = '
<span class="rate-wrapper">
    <span class="rate rate-30"></span>
</span>
';
            echo htmlspecialchars($code);
            ?>
            </pre>
            </code>
        </div>
    </div>
    <div class="cont">
        <h3 id="background-color">Background color</h3>
        <div class="w-10 bg-grey-light">.bg-grey-light</div>
        <div class="w-10 bg-grey">.bg-grey</div>
        <div class="w-10 bg-greenthea-light">.bg-greenthea-light</div>
        <div class="w-10 bg-greenthea">.bg-greenthea</div>
        <div class="w-10 bg-blue-light">.bg-blue-light</div>
        <div class="w-10 bg-blue">.bg-blue</div>
        <div class="w-10 bg-red-light">.bg-red-light</div>
        <div class="w-10 bg-red">.bg-red</div>
        <div class="w-10 bg-orange-light">.bg-orange-light</div>
        <div class="w-10 bg-orange">.bg-orange</div>
    </div>
    <div class="cont">
        <h3 id="buttons">Buttons</h3>
        <div class="w-10">
            <button type="button" class="button">.button</button>
        </div>
        <p>Html :
            <button class="btn-copy-code button" data-clipboard-target="#button-code-html-copy">
                <i class="fa fa-copy"></i>
            </button>
        </p>
        <code type="html">
            <pre id="button-code-html-copy">
            <?php
            $code = '
<button type="button" class="button">Button</button>
';
            echo htmlspecialchars($code);
            ?>
            </pre>
        </code>
    </div>
    <div class="cont">
        <h3 id="flash-message">Flash message</h3>
        <div class="w-10">
            <button type="button" class="flash-message-button button bg-greenthea" data-class="bg-greenthea-light" data-toggle="flash-message" data-text="Sed ut perspiciatis unde omnis iste natus error">Success</button>
            <button type="button" class="flash-message-button button bg-orange" data-class="bg-orange-light" data-toggle="flash-message" data-text="Sed ut perspiciatis unde omnis iste natus error">Warning</button>
            <button type="button" class="flash-message-button button bg-red" data-class="bg-red-light" data-toggle="flash-message" data-text="Sed ut perspiciatis unde omnis iste natus error">error</button>
            <button type="button" class="flash-message-button button bg-blue" data-class="bg-blue-light" data-toggle="flash-message" data-text="Sed ut perspiciatis unde omnis iste natus error">Info</button>
        </div>
        <div class="tabs">
            <div class="tabs-head">
                <div data-toggle="tab" data-target="#flash-message-code-html" class="active">Html</div>
                <div data-toggle="tab" data-target="#flash-message-code-js">Js</div>
            </div>
            <div class="tab-content">
                <div id="flash-message-code-html" class="active">
                    <p>
                        <button class="btn-copy-code button" data-clipboard-target="#flash-message-code-html-copy">
                            <i class="fa fa-copy"></i>
                        </button>
                    </p>
                    <code type="html">
                        <pre id="flash-message-code-html-copy">
                        <?php
                        $code = '
<main>
    <div class="flash-message-container"></div>
...
    <button type="button" class="flash-message-button button" data-class="bg-greenthea" data-toggle="flash-message">Success</button>
';
                        echo htmlspecialchars($code);
                        ?>
                        </pre>
                    </code>
                </div>
                <div id="flash-message-code-js">
                    <p>
                        <button class="btn-copy-code button" data-clipboard-target="#flash-message-code-js-copy">
                            <i class="fa fa-copy"></i>
                        </button>
                    </p>
                    <code type="html">
                        <pre id="flash-message-code-js-copy">
                        <?php
                        $code = '
var event = new CustomEvent(\'cssThea.flash-message\', {detail: [{dataset: {\'class\':\'bg-greenthea-light\', \'text\': \'Text to display\'}}]});
window.dispatchEvent(event);
';
                        echo htmlspecialchars($code);
                        ?>
                        </pre>
                    </code>
                </div>
            </div>
        </div>
    </div>
    <div class="cont">
        <h3 id="tabs">Tabs</h3>
        <div class="tabs">
            <div class="tabs-head">
                <div data-toggle="tab" data-target="#tab1" class="active">Tab 1</div>
                <div data-toggle="tab" data-target="#tab2">Tab 2</div>
                <div data-toggle="tab" data-target="#tab3">Tab 3</div>
            </div>
            <div class="tab-content">
                <div id="tab1" class="active">
                    <p>
                        Tab 1 : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />
                    </p>
                </div>
                <div id="tab2">
                    <p>
                        Tab 2 : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br />
                    </p>
                </div>
                <div id="tab3">
                    <p>Tab 3 : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
        <div class="w-10">
            <p>Html :
                <button class="btn-copy-code button" data-clipboard-target="#tab-code">
                    <i class="fa fa-copy"></i>
                </button>
            </p>
            <code type="html">
                <pre id="tab-code">
                <?php
                $code = '
<div class="tabs">
    <div class="tabs-head">
        <div data-toggle="tab" data-target="#tab1" class="active">Tab 1</div>
        <div data-toggle="tab" data-target="#tab2">Tab 2</div>
        <div data-toggle="tab" data-target="#tab3">Tab 3</div>
    </div>
    <div class="tab-content">
        <div id="tab1" class="active">Tab 1 content</div>
        <div id="tab2">Tab 2 content</div>
        <div id="tab3">Tab 3 content</div>
    </div>
</div>
';
                echo htmlspecialchars($code);
                ?>
                </pre>
            </code>
        </div>
    </div>
</main>
<footer>
    <br />
    <br />
    <br />
    <br />
    <div class="cont">
        <a href="#"><i class="fa fa-github"></i></a>
        <a class="last" href="http://www.codythea.com">2017 - codythea.com</a>
    </div>
</footer>
</body>