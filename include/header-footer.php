<?php
function libs() {
    echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">' .
        '<link rel="stylesheet" href="../css/style.css" />'.
        '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>'.
        '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>'.
        '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>';
}

function start() {
    echo '<html>' .
        '<head>';
    echo libs();
    echo '<body>' .
        '<header>' .
        '<div class="container page-header">' .
        '<h1 class="primary">Zachary LaVere</h1> ' .
        '</div>' .
        '<div class="container"><nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="nav-item nav-link" href="http://zacharylavere.com">Home</a>
                <a class="nav-item nav-link" href="https://github.com/zlavere"">GitHub</a>
          </nav>
          </div>' .
        '</header>';
}

function endPage()
{
    echo '<footer class="page-footer font-small blue pt-4">' .
        '<div class="d-flex flex-row bd-highlight container">' .
        '<div class="p-2 bd-highlight"><a href="http://zacharylavere.com">Home</a></div>' .
        '<div class="p-2 bd-highlight">Resume</div>' .
        '<div class="p-2 bd-highlight">Projects</div>' .
        '<div class="p-2 bd-highlight"><a href="https://github.com/zlavere">Github</a></div>' .
        '<div class="p-2 bd-highlight"><a href="../misc/anthony-powers.php">Random Things</a></div>' .
        '</div>' .
        '</footer>' .
        '</div>' .
        '</body>' .
        '</html>';
}