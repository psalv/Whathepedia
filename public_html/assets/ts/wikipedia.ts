
let CUR_ANSWER = null;

function loadRandom (callback) {

    $('#content').fadeOut(600);

    let wiki_title: string = "";
    let wiki_id: number = -1;
    let wiki_header: string = "";
    let wiki_other = null;

    let url = "//en.wikipedia.org/w/api.php?action=query&list=random&rnlimit=4&rnnamespace=0&rvprop=content&format=json&callback=?";
    $.getJSON(url, function(data) {

        wiki_title = data.query.random[0].title;
        wiki_id = data.query.random[0].id;

        wiki_other = [wiki_title, data.query.random[1].title, data.query.random[2].title, data.query.random[3].title];
        url = "//en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exlimit=max&explaintext&exintro&callback=?&pageids=" + wiki_id;

        $.getJSON(url, function(data) {
            wiki_header = data.query.pages[wiki_id].extract;

            callback(wiki_title, wiki_id, wiki_header, wiki_other);

        });
    });
}

function buildRandom(title: string, id: number, header: string, other: any){
    CUR_ANSWER = title;

    let to_remove = title.toLowerCase().split(" ");
    let to_display = "";
    let to_parse = header.split(" ");
    for(let i = 0; i < to_parse.length; i++){
        let cur = to_parse[i].toLowerCase();
        let ok = true;
        for(let j = 0; j < to_remove.length; j++){
            if(to_remove[j] == cur){
                ok = false;
                break;
            }
        }
        if(ok){
            to_display += " ";
            to_display += to_parse[i];
        } else {
            if(to_display[to_display.length - 2] != "_"){
                to_display += " ";
            }

            to_display += "______";
        }
    }

    let remaining = [0, 1, 2, 3];
    let order = [];
    while(order.length < 4){
        let cur: number = Math.floor(Math.random() * 4);
        console.log(cur);
        if(remaining[cur] != -1){
            remaining[cur] = -1;
            order.push(other[cur]);
        }
    }

    $('#content').fadeIn(300);


    $("#content").html(to_display + "<a href=\"\" id=\"page\" target=\"_blank\"><i class=\"fa fa-2x fa-wikipedia-w\"></i></a>\n");
    $('#page').attr("href", "//en.wikipedia.org/?curid=" + id);

    let options = $('.option');
    for(let i = 0; i < 4; i++){
        options[i].innerHTML = order[i];
        options[i].style.backgroundColor = "#448AFF";
    }

    $("#options").removeClass("hidden");

}

$('#start').on('click', function () {
   loadRandom(buildRandom);
});

$('body').on('keydown', function (e) {
    if((e.which || e.keyCode) == 32){
        loadRandom(buildRandom);
    }
});

$(".option").on('click', function (this) {
    let cur = this.innerHTML;
    let options = $('.option');
    for(let i = 0; i < options.length; i++){
        if(options[i].innerHTML == cur){
            if(cur == CUR_ANSWER){
                options[i].style.backgroundColor = "#4CAF50";
            } else {
                options[i].style.backgroundColor = "#F44336";
            }
        } else if(options[i].innerHTML == CUR_ANSWER) {
            options[i].style.backgroundColor = "#4CAF50";
        } else{
            options[i].style.backgroundColor = "white";
        }
    }
});
