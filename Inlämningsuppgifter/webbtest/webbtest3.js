
var article_title = document.getElementById("article_title");
var article_text = document.getElementById("article_text");
var chaning_bg = document.getElementById("changingbg");

function showarticle(number) {
    switch(number) {
        case '1':
            article_title.innerHTML = "Flowers";
            article_text.innerHTML = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum beatae repellat omnis, molestiae quaerat deserunt nobis ad optio quam debitis animi saepe facere, aperiam laborum praesentium nihil. Reiciendis debitis sequi, consectetur eaque nam, praesentium sint perspiciatis rem libero, ipsum illum repellendus. Omnis perspiciatis, dolores dignissimos animi libero in! Perferendis, quas.";
            chaning_bg.src = "https://cdn.britannica.com/q:60/88/194588-050-967E8D17/flowers.jpg";
            break;
        case '2':
            article_title.innerHTML = "Trees";
            article_text.innerHTML = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius fugiat, maxime nam aperiam ipsum, nesciunt in voluptates harum laboriosam dolorum illo corporis quisquam! Dolore distinctio ea vitae ut quaerat hic sit officiis nesciunt nisi aliquam praesentium, laboriosam laudantium nemo similique at voluptas? Explicabo nesciunt itaque et culpa dignissimos esse ullam perspiciatis temporibus dolorem voluptas asperiores quod quidem molestias commodi debitis eos corrupti quasi, illo dolore eius eligendi. Natus ab assumenda inventore amet, sunt culpa quos laborum aperiam cum itaque quo.";
            chaning_bg.src = "https://www.publicdomainpictures.net/pictures/50000/velka/tree-in-the-park-1373392987Gld.jpg";
            break;
        case '3':
            article_title.innerHTML = "Mushrooms";
            article_text.innerHTML = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti explicabo debitis officiis tempore quaerat fuga dolorum, fugit dolores. Dignissimos necessitatibus cum odit nesciunt ratione laboriosam accusantium nihil asperiores mollitia quaerat possimus nam alias, tempore dolores at magnam expedita nulla placeat deserunt ullam amet est? Dolores atque dolorem incidunt ratione, iure quisquam quasi voluptatum. Officiis libero, quis fugit doloremque laboriosam suscipit, aspernatur quisquam laborum, mollitia voluptatum labore blanditiis repudiandae quasi dolor.";
            chaning_bg.src = "https://cdn.hswstatic.com/gif/mushrooms-save-earth.jpg";
            break;
    };
};