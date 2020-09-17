for (let i = 0; i < 20; i++) {
    // console.log( i + 1 );
    document.write( i * 10 + "<br>" );
}

let array = [ 1,2,10,5,678,23,2300,789,341,1,5,6,7212,34,568 ];
let sum = 0;

for (let i = 0; i < array.length; i++) {
    if( array[i] % 2 == 1 ) {
        console.log(">> " + array[i]);
    }
    else {
        sum += array[i];
    }
}

console.log("SUM: " + sum);

document.getElementsByTagName("h1")[0].innerHTML = "Lorem Ipsum";