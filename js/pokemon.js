$(function(){
    var entry_url = $("#entry_url").val();

    $("#party_in").click(function(){
        var pokemon_id = $("#pokemon_id").val();
        location.href = entry_url + "index.php?display=party&pokemon_id=" + pokemon_id;
    });


    
});