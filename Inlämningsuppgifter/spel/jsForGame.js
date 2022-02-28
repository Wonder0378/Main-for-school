document.addEventListener('DOMContentLoaded', function() {
    const grid = document.querySelector('.grid');
    const colors = [
        'red',
        'yellow',
        'green',
        'blue',
        'purple',
        'orange'
    ];
    let squares = [];
    let width = 8;
    let score = 0;
    function createboard() {
        for(i=0; i<width * width; i++) {
            const square = document.createElement('div');
            let color = Math.floor(Math.random() * colors.length);
            square.style.background = colors[color];
            console.log(colors[color]);
            square.setAttribute('id', i);
            square.setAttribute('draggable', true);
            grid.appendChild(square);
            squares.push(square);
        };
    };
    createboard();

    let colorbeingdragged;
    let colorbeingreplaced;
    let squareidbeingdragged;
    let squareidbeingreplaced;

    squares.forEach(square => square.addEventListener('dragstart', dragStart));
    squares.forEach(square => square.addEventListener('dragend', dragEnd));
    squares.forEach(square => square.addEventListener('dragover', dragOver));
    squares.forEach(square => square.addEventListener('dragenter', dragEnter));
    squares.forEach(square => square.addEventListener('dragleave', dragLeave));
    squares.forEach(square => square.addEventListener('drop', drop));

    function dragStart() {
        colorbeingdragged = this.style.background;
        squareidbeingdragged = parseInt(this.id);
        console.log('colorbeingdragged: ' + colorbeingdragged);
        console.log('squareidbeingdragged: ' + squareidbeingdragged);
    };
    function dragEnd() {
        let validMoves = [
            squareidbeingdragged -1, 
            squareidbeingdragged - width, 
            squareidbeingdragged + 1, 
            squareidbeingdragged + width
        ];
        let validMove = validMoves.includes(squareidbeingreplaced);

        if(squareidbeingreplaced && validMove) {
            squareidbeingreplaced = null;
        } else if(squareidbeingreplaced && !validMove) {
            squares[squareidbeingreplaced].style.background = colorbeingreplaced;
            squares[squareidbeingdragged].style.background = colorbeingdragged;
        } else {
            squares[squareidbeingdragged].style.background = colorbeingdragged;
        }

    };
    function moveDown() {
        for(i = width; i< (width * width); i++) {
            if(squares[i].style.background === "") {
                squares[i].style.background = squares[i-width].style.background;
                squares[i-width].style.background = "";
            }
        }
    }
    for(i = 0; i<width; i++) {
        if(squares[i].style.background === "") {
            let randomcolor = Math.floor(Math.random()*colors.lenght);
            squares[i].style.background = colors[randomcolor];
        }
    }
    function dragOver(e) {
        e.preventDefault();
    };
    function dragEnter(e) {
        e.preventDefault();
    };
    function dragLeave(e) {
        //this.style.background = "";
    };
    function drop() {
        colorbeingreplaced = this.style.background;
        squareidbeingreplaced = parseInt(this.id);
        this.style.background = colorbeingdragged;
        squares[squareidbeingdragged].style.background = colorbeingreplaced;

    };
    function checkRowForThree() {
        for(i=0; i<62; i++) {
            let rowOfThree = [i, i+1, i+2];
            let decidedColor = squares[i].style.background;

            const isBlank = squares[i].style.background === "";
            const notValid = [6, 7, 14, 22, 23, 30, 31, 38, 39, 46, 47, 54, 55];
            if(notValid.includes(i)) continue

            if(rowOfThree.every(index => squares[index].style.background === decidedColor && !isBlank)) {
                score += 3;
                document.getElementById("score").innerHTML = score;
                rowOfThree.forEach(index => {
                    squares[index].style.background = "";
                });
            };
        };
    };
    checkRowForThree();
    function checkColumnForThree() {
        for (i = 0; i < 48; i++) {
            let columnOfThree = [i, i + width, i + width + width];
            let decidedColor = squares[i].style.background;
            const isBlank = squares[i].style.background === '';
            //const notValid=[];
            //if(notValid.includes(i)) continue;
            if (columnOfThree.every(index => squares[index].style.background === decidedColor && !isBlank)) {
                score += 3;
                document.getElementById('score').innerHTML = score;
                columnOfThree.forEach(index => {
                    squares[index].style.background = '';
                })
            }
        }
    }
    checkColumnForThree();
    window.setInterval(function() {
        checkRowForThree();
        checkColumnForThree();
        moveDown();
    }, 1000 / 10);
});