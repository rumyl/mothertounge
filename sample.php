<!DOCTYPE html>
<html>
<head>
    <title>Crossword Puzzle</title>
    <style>
        .crossword {
            display: grid;
            grid-template-columns: repeat(11, 40px);
            grid-template-rows: repeat(12, 40px);
        }

        .cell {
            width: 40px;
            height: 40px;
            border: 1px solid #000;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            font-size: 18px;
        }

        .cell.horizontal {
            border-bottom: none;
        }

        .cell.vertical {
            border-right: none;
        }
    </style>
</head>
<body>
    <div class="crossword">
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal">m</div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border-bottom:solid;">b</div>
        <div class="cell" contenteditable="true"></div>
        <div class="cell horizontal" style="border-bottom:solid;">y</div>
        <div class="cell" contenteditable="true"></div>
        <div class="cell horizontal" style="border-bottom:solid;">w</div>
        <div class="cell" contenteditable="true"></div>
        <div class="cell horizontal" style="border-bottom:solid;">s</div>
        <div class="cell horizontal" style="border:none;"></div>
        <div class="cell horizontal" style="border:none;"></div>
        <!-- Add more cells with contenteditable as needed -->
        <!-- Continue filling in the grid... -->
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border-right:solid;">d</div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>


        <div class="cell vertical">t</div>
        <div class="cell vertical" contenteditable="true"></div>
        <div class="cell vertical">n</div>
        <div class="cell vertical" contenteditable="true"></div>
        <div class="cell vertical">e</div>
        <div class="cell vertical" contenteditable="true"></div>
        <div class="cell vertical">n</div>
        <div class="cell vertical" contenteditable="true"></div>
        <div class="cell vertical" contenteditable="true"></div>
        <div class="cell vertical" style="border-right:solid;">n</div>
        <div class="cell vertical" style="border:none;"></div>


        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border-right:solid;">g</div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>


        <div class="cell vertical">b</div>
        <div class="cell vertical" contenteditable="true"></div>
        <div class="cell vertical">e</div>
        <div class="cell vertical" contenteditable="true"></div>
        <div class="cell vertical">l</div>
        <div class="cell vertical" contenteditable="true"></div>
        <div class="cell vertical">g</div>
        <div class="cell vertical" contenteditable="true"></div>
        <div class="cell vertical" contenteditable="true"></div>
        <div class="cell vertical" contenteditable="true"></div>
        <div class="cell vertical" style="border-right:solid;">n</div>


        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border-right:solid;" contenteditable="true"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>

        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border-right:solid;">s</div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>

        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical">k</div>
        <div class="cell vertical" contenteditable="true" ></div>
        <div class="cell vertical" >r</div>
        <div class="cell vertical" >s</div>
        <div class="cell vertical"  contenteditable="true"></div>
        <div class="cell vertical" >d</div>
        <div class="cell vertical" style="border-right:solid;"  contenteditable="true"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>

        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border-right:solid;" contenteditable="true"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>

        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border-right:solid;" contenteditable="true"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>

        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border-right:solid;">m</div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
        <div class="cell vertical" style="border:none;"></div>
    </div>
</body>
</html>
