<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            header {
                background-color: #e3e3e3;
                text-align: center;
                padding: 2em;
            }
            #comp {
                color: green;
                font-weight: bolder; 
            }
            #ncomp {
                color: red;
                font-weight: bolder; 
            }
        </style>
    </head>
    <body>
        
        <nav>
            <ul>
                <li><a href="/about/culture"> About our culture</a></li>
                <li><a href="/about"> About US</a></li>
                <li><a href="/contact-our-company"> Contact US</a></li>
            </ul>
        </nav>    
        
        <h1>My Tasks</h1>
        <ul>
            <?php foreach($tasks as $task) : ?>
                <li>
                    <?= "{$task->description}: " ?>
                    <?php if($task->completed) :?>
                        <span id='comp'><?= 'completed' ?></span>
                    <?php else : ?>
                        <span id='ncomp'><?= 'Not completed' ?></span>
                    <?php endif; ?>
                </li>    
            <?php endforeach; ?>
        </ul>
        
    </body>
</html>