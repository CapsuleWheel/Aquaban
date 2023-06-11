function showBlock(blockId) {
    let blocks = document.getElementsByClassName('block');

    for (let i = 0; i < blocks.length; i++) {
        let block = blocks[i];

        if (block.id === blockId) {
            block.style.display = 'block';
        } else {
            block.style.display = 'none';
        }
    }
}