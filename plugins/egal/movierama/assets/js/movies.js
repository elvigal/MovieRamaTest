
$(document).ready(function(){
    $("#new-movie form :input, #new-movie form textarea").change(function() {
        $("#new-movie form").data("changed",true);
     });
});

// function to sort items based on sort type
function sortItems(container,sortItems,sortType) {
    var moviesList = $("."+sortItems);
        
    moviesList.sort(function(a, b){
        if (sortType.includes('num')) { return $(a).data(sortType)-$(b).data(sortType); }
        else if (sortType.includes('date')) { 
            return new Date($(b).data(sortType)) - new Date($(a).data(sortType)); 
        }
    });
    
    $("#"+container).html(moviesList);
}

// cancel movie submission
function confirmCancel() {
    if ($('#new-movie form').data("changed")) {
        if (!confirm('Are you sure you want to cancel movie submission?')) {
            return false;
        }
    }
    
    return true;
}