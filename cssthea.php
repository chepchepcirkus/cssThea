<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-language" content="fr-FR" />
    <meta name="keywords" content="bootstrap css, framework css, cssthea, codythea.com"/>
    <meta name="description" content="bootstrap css, framework css, cssthea, codythea.com"/>
    <title>cssThea - codythea.com</title>
    <meta name="robots" content="INDEX, FOLLOW"/>
    <link rel="stylesheet" href="cssThea/css/normalize.css"/>
    <link rel="stylesheet" href="cssThea/css/cssthea.css"/>
    <link rel="stylesheet" href="cssThea/css/cssthea-theme.css"/>
    <link rel="stylesheet" href="cssThea/css/font-awesome.css"/>
    <script src="cssThea/js/jquery-2.2.3-min.js"></script>
    <script src="cssThea/js/main.js"></script>
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
    <div>
        <h1><i class="fa fa-coffee fa-2x"></i> cssThea <small>light taste</small></h1>
        <div class="social-network">
            <a target="_blank" href="https://fr.linkedin.com/in/steven-servanton-26322681" title="Rejoignez-moi sur Linked in"><i class="fa fa-linkedin-square fa-2x"></i></a>
            <a target="_blank" href="https://github.com/chepchepcirkus" title="Rejoignez-moi sur github.com"><i class="fa fa-github fa-2x"></i></a>
            <a target="_blank" href="https://www.malt.fr/profile/stevenservanton" data-id="586f8abc3ef87730d5dfd408" class="hopwork_button" data-width="big" data-layout="scare">Malt</a>
        </div>
        <a class="open-menu-trigger" id="open-menu-trigger">
            <i class="fa fa-bars fa-3x"></i>
        </a>
        <a class="close-menu-trigger" id="close-menu-trigger" style="display:none;">
            <i class="fa fa-close fa-3x"></i>
        </a>
        <nav>
            <a href="#usefull-classes" class="scroll-to-anchor" title="Usefull Classes">Usefull classes</a>
            <a href="#grid" class="scroll-to-anchor" title="Grid">Grid</a>
            <a href="#time-line" class="scroll-to-anchor" title="Time line">Time line</a>
            <a href="#bar" class="scroll-to-anchor" title="Barre">Barre</a>
            <a href="#background-color" class="scroll-to-anchor" title="Background color">Background Color</a>
            <a href="#buttons" class="scroll-to-anchor" title="Buttons">Buttons</a>
            <a href="#flash-message" class="scroll-to-anchor" title="Flash message">Flash message</a>
            <a href="#tabs" class="scroll-to-anchor" title="Tabs">Tabs</a>
            <a href="#scroll" class="scroll-to-anchor" title="Scroll">Scroll</a>
            <a href="#table" class="scroll-to-anchor" title="Table">Table</a>
            <a href="http://www.codythea.com/cssthea-theme.html"><i class="fa fa-coffee"></i> cssThea Theme</a>
            <a href="http://www.codythea.com"><i class="fa fa-coffee"></i> codythea.com</a>
        </nav>
    </div>
</header>
<main>
    <div class="flash-message-container"></div>
    <a href="#" id="scroll-up-btn" style="display: none;" onclick="scrollToTop()" class="btn-scroll-up"><i class="fa fa-chevron-circle-up fa-3x"></i></a>
    <p class="a-center head-line">cssThea is a simple UI Kit for your application, <br/> feel free to <br/>fork, share and customize, <br/>enjoy <a href="https://github.com/chepchepcirkus/cssThea"><i class="fa fa-github"></i> cssThea</a><br/> Any feed back or contribution will be appreciated.</p>
    <div class="cont">
        <h2 id="usefull-classes">Usefull classes</h2>
        <div class="w-5">
            <h3>Alignement</h3>
            <p class="a-left">class : a-left</p>
            <p class="a-center">class : a-center</p>
            <p class="a-right">class : a-right</p>
        </div>
        <div class="w-5">
            <h3>Head line</h3>
            <p>.head-line</p>
            <p class="head-line">You can introduce your self here !</p>
        </div>
    </div>
    <div class="cont">
        <h2 id="grid">Grid</h2>
        <p><i>Grid block behaviour below is available only if the view port is >= 768px,<br />under 768px block takes 100% of width</i></p>
        <div class="w-12 bg-grey-light a-center">12</div>
        <div class="w-11 bg-grey-light a-center">11</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-10 bg-grey-light a-center">10</div>
        <div class="w-2 bg-grey-light a-center">2</div>
        <div class="w-9 bg-grey-light a-center">9</div>
        <div class="w-3 bg-grey-light a-center">3</div>
        <div class="w-8 bg-grey-light a-center">8</div>
        <div class="w-4 bg-grey-light a-center">4</div>
        <div class="w-7 bg-grey-light a-center">7</div>
        <div class="w-5 bg-grey-light a-center">5</div>
        <div class="w-6 bg-grey-light a-center">6</div>
        <div class="w-6 bg-grey-light a-center">6</div>
        <div class="w-5 bg-grey-light a-center">5</div>
        <div class="w-7 bg-grey-light a-center">7</div>
        <div class="w-4 bg-grey-light a-center">4</div>
        <div class="w-8 bg-grey-light a-center">8</div>
        <div class="w-3 bg-grey-light a-center">3</div>
        <div class="w-9 bg-grey-light a-center">9</div>
        <div class="w-2 bg-grey-light a-center">2</div>
        <div class="w-10 bg-grey-light a-center">10</div>
        <div class="w-1 bg-grey-light a-center">1</div>
        <div class="w-11 bg-grey-light a-center">11</div>
        <div class="w-12">
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
        <p>.push-[1-9]</p>
        <div class="w-1 push-1 bg-grey-light a-center">p-1</div>
        <div class="w-1 push-2 bg-grey-light a-center">p-2</div>
        <div class="w-3 push-3 bg-grey-light a-center">p-3</div>
        <div class="w-6 push-4 bg-grey-light a-center">p-4</div>
        <div class="w-2 push-5 bg-grey-light a-center">p-5</div>
        <div class="w-4 push-6 bg-grey-light a-center">p-6</div>
        <div class="w-1 push-7 bg-grey-light a-center">p-7</div>
        <div class="w-1 push-8 bg-grey-light a-center">p-8</div>
        <div class="w-1 push-9 bg-grey-light a-center">p-9</div>
        <p>.cont</p>
        <p><i>class .cont behave as a container, that isolate your block</i></p>
        <div class="cont">
            <div class="w-1 push-1 bg-grey-light a-center">p-1</div>
            <div class="w-1 push-2 bg-grey-light a-center">p-2</div>
        </div>
        <div class="cont">
            <div class="w-1 push-5 bg-grey-light a-center">p-1</div>
            <div class="w-1 push-1 bg-grey-light a-center">p-2</div>
        </div>
        <div class="w-12">
            <p>Html :
                <button class="btn-copy-code button" data-clipboard-target="#grid-pushcode">
                    <i class="fa fa-copy"></i>
                </button>
            </p>
            <code type="html">
                    <pre id="grid-push-code">
                    <?php
                    $code = '
<div class="cont">
    <div class="w-1 push-1 bg-grey-light a-center">p-1</div>
    <div class="w-1 push-2 bg-grey-light a-center">p-2</div>
</div>
<div class="cont">
    <div class="w-1 push-5 bg-grey-light a-center">p-1</div>
    <div class="w-1 push-1 bg-grey-light a-center">p-2</div>
</div>
    ';
                    echo htmlspecialchars($code);
                    ?>
                    </pre>
            </code>
        </div>
    </div>
    <div class="cont">
        <h3 id="time-line">Time line</h3>
        <div class="w-6">
            <ul class="time-line">
                <li><span></span>20017/2016</li>
                <li><span></span>2005/2016</li>
                <li><span></span>2004/2005</li>
            </ul>
        </div>
        <div class="w-6">
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
        <div class="w-6">
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
        <div class="w-6">
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
        <div class="w-12 bg-grey-light">.bg-grey-light</div>
        <div class="w-12 bg-grey">.bg-grey</div>
        <div class="w-12 bg-greenthea-light">.bg-greenthea-light</div>
        <div class="w-12 bg-greenthea">.bg-greenthea</div>
        <div class="w-12 bg-blue-light">.bg-blue-light</div>
        <div class="w-12 bg-blue">.bg-blue</div>
        <div class="w-12 bg-red-light">.bg-red-light</div>
        <div class="w-12 bg-red">.bg-red</div>
        <div class="w-12 bg-orange-light">.bg-orange-light</div>
        <div class="w-12 bg-orange">.bg-orange</div>
    </div>
    <div class="cont">
        <h3 id="buttons">Buttons</h3>
        <div class="w-12">
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
        <div class="w-12">
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
        <div class="w-12">
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
    <div class="cont">
        <h3 id="scroll">Scroll</h3>
        <div class="w-12">
            <h4>Scroll up</h4>
            <p>Html :
                <button class="btn-copy-code button" data-clipboard-target="#scroll-code-html-copy">
                    <i class="fa fa-copy"></i>
                </button>
            </p>
            <code type="html">
                <pre id="scroll-code-html-copy">
                <?php
                $code = '
<a href="#" id="scroll-up-btn" style="display: none;" onclick="scrollToTop()" class="btn-scroll-up"><i class="fa fa-chevron-circle-up fa-3x"></i></a>
';
                echo htmlspecialchars($code);
                ?>
                </pre>
            </code>
        </div>
        <div class="w-12">
            <h4>Scroll to anchor</h4>
            <div class="w-12">
                <p>Place your anchor</p>
                <code type="html">
                    <pre>
                    <?php
                    $code = '
    <h2 id="my-anchor">My Anchor</h2>
    ';
                    echo htmlspecialchars($code);
                    ?>
                    </pre>
                </code>
                <p>Then you can reach it by 2 way : </p>
            </div>
            <div class="w-12">
                <p>By Classic anchor</p>
                <p><i><strong>.scroll-to-anchor</strong> is the class that trigger a smooth effect going to the anchor, if javascript is not available backwards compatibility is managed by the href attribute</i></p>
                <p>Html :
                    <button class="btn-copy-code button" data-clipboard-target="#scroll-anchor-classic-code-html-copy">
                        <i class="fa fa-copy"></i>
                    </button>
                </p>
                <code type="html">
                    <pre id="scroll-anchor-classic-code-html-copy">
                    <?php
                    $code = '
    <a href="#my-anchor"  class="scroll-to-anchor">Classic scroll to anchor</a>
    ';
                    echo htmlspecialchars($code);
                    ?>
                    </pre>
                </code>
            </div>
            <div class="w-12">
                <p>By trigger it from anywhere you want</p>
                <p>Html :
                    <button class="btn-copy-code button" data-clipboard-target="#scroll-anchor-trigger-code-html-copy">
                        <i class="fa fa-copy"></i>
                    </button>
                </p>
                <code type="html">
                    <pre id="scroll-anchor-trigger-code-html-copy">
                    <?php
                    $code = '
    <button onclick="scrollToAnchor(\'#my-anchor\')">Triggered Scroll to anchor</a>
    ';
                    echo htmlspecialchars($code);
                    ?>
                    </pre>
                </code>
            </div>
        </div>
    </div>
    <div class="cont">
        <h3 id="table">Table</h3>
        <div class="w-12">
            <h4>Table</h4>
            <table class="w-12">
                <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                    <th>Column 4</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Value 1</td>
                    <td>Value 2</td>
                    <td>Value 3</td>
                    <td>Value 4</td>
                </tr>
                <tr>
                    <td>Value 1</td>
                    <td>Value 2</td>
                    <td>Value 3</td>
                    <td>Value 4</td>
                </tr>
                </tbody>
            </table>
            <p>Html :
                <button class="btn-copy-code button" data-clipboard-target="#table-code-html-copy">
                    <i class="fa fa-copy"></i>
                </button>
            </p>
            <code type="html">
                <pre id="table-code-html-copy">
                <?php
                $code = '
<table class="w-12">
  <thead>
    <tr>
      <th>Column 1</th>
      <th>Column 2</th>
      <th>Column 3</th>
      <th>Column 4</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Value 1</td>
      <td>Value 2</td>
      <td>Value 3</td>
      <td>Value 4</td>
    </tr>
    <tr>
      <td>Value 1</td>
      <td>Value 2</td>
      <td>Value 3</td>
      <td>Value 4</td>
    </tr>
  </tbody>
</table>
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