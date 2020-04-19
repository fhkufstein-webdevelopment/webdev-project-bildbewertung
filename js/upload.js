var element_to_insert ;
var container_block ;

block_to_insert = document.createElement( 'div' );
/*block_to_insert.innerHTML = <img> ;*/

container_block = document.getElementById( 'democontainer' );
container_block.appendChild( block_to_insert );