var rootURL = "http://localhost:81/DatabasesProject/api/whiskies";

//Retrieves the whiskey list when the DOM is ready
$(document).ready(function () {
    getWhiskies();
    $(document).on("click", '#table_body td', function () {
        getWhiskeyById(this.id);
    });

    $(document).on("click", '#whiskeyList a', function () {
        getWhiskeyById(this.id);
    });

    // Trigger search when pressing 'Return' on search key input field
    $('#searchKey').keypress(function (e) {
        if (e.which == 13) {
            search($('#searchKey').val());
            e.preventDefault();
            return false;
        }
    });

    $('#btnSearch').click(function () {
        search($('#searchKey').val());
    });

    $('#btnAdd').click(function () {
        newWhiskey();
    });

    $('#btnClear').click(function () {
        clearFields();
    });

    $('#btnSave').click(function () {
        if ($('#id').val() === '') {
            addWhiskey();
        } else {
            updateWhiskey();          
        }
        return false;
    });

    var search = function (searchKey) {
        if (searchKey === '') {
            getWhiskies();
        } else {
            findByBrand(searchKey);
        }
    };

    $('#btnDelete').hide();

    $('#btnDelete').click(function () {
        deleteWhiskey();
        getWhiskies();
        clearFields();
    });



});

//Retrieves the row info info when modal button is clicked

var clearFields = function () {
    console.log('clearFields');
    $('#id').val("");
    $('#brand').val("");
    $('#product').val("");
    $('#year').val("");
    $('#description').val("");
    $('#price').val("");
    $('#pic').attr('src', '');


};

var getWhiskies = function () {
    console.log('getWhiskies');
    $.ajax({
        type: 'GET',
        url: rootURL,
        dataType: "json",
        success: renderList
    });
};

var renderList = function (data) {
    //list = data.whiskey;
    console.log(data);
    $.each(data, function (index, whiskey) {
        $('#table_body').append('<tr><td>' + whiskey.Id + '</td><td>' + whiskey.Brand + '</td><td>' + whiskey.Product + '</td><td>' + whiskey.Year + '</td><td>' + whiskey.Description + '</td><td>' + whiskey.Price + '</td><td id="' + whiskey.Id + '"><button data-toggle="modal" data-target="#myModal" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></button><button data-toggle="modal" data-target="#editModal" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></td></tr>');
    });
    $('#table_id').DataTable();
};
// 
// 

var currentWhiskey;

var getWhiskeyById = function (id) {
    console.log('getWhiskeyById: ' + id);
    $.ajax({
        type: 'GET',
        url: rootURL + '/' + id,
        dataType: "json",
        success: function (data) {
            $('#btnDelete').show();
            console.log('getWhiskeyById success: ' + data.Brand);
            currentWhiskey = data;
            renderDetails(currentWhiskey);
            renderUnorderedListDetails(currentWhiskey);
        }
    });
};

var findByBrand = function (searchKey) {
    console.log('findByBrand: ' + searchKey);
    $.ajax({
        type: 'GET',
        url: rootURL + '/search/' + searchKey,
        dataType: "json",
        success: renderUnorderedList,
        error: function (jqXHR, textStatus, errorThrown) {
            alert('search: ' + textStatus);
        }
    });
};

//displays details in the modal
var renderDetails = function (whiskey) {
    $('#contents').empty();
    var htmlStr = '<h4>' + whiskey.Id + '</h4><h4>' + whiskey.Product + '</h4><h4>' + whiskey.Description + '</h4><img style="align: center; width:300px; height:300px;" src="' + whiskey.Picture + '"/>';
    $("#contents").html(htmlStr);
    //$('#myModal').modal('show');
    $('#editModal').modal('show');
};

//search functions
$(document).on("click", '#whiskeyList a', function () {
    getWhiskeyById(this.Id);
});

var search = function (searchKey) {
    if (searchKey === '')
        getWhiskies();
    else
        findByBrand(searchKey);
};

$('#btnSearch').click(function () {
    search($('#searchKey').val());
    return false;
});

var renderUnorderedList = function (data) {
    // JAX-RS serializes an empty list as null, and a 'collection of one' as an object (not an 'array of one')
    //var list = data === null ? [] : (data instanceof Array ? data : [data]);
    var list = data.whiskey;
    $('#whiskeyList li').remove();
    $.each(data, function (index, whiskey) {
        $('#whiskeyList').append('<li><a href="#" id="' + whiskey.Id + '">' + whiskey.Product + '</a></li>');
    });
};


//gets row info and and displays it in edit modal textfields
var renderUnorderedListDetails = function (whiskey) {
    $('#id').val(whiskey.Id);
    $('#brand').val(whiskey.Brand);
    $('#product').val(whiskey.Product);
    $('#year').val(whiskey.Year);
    $('#description').val(whiskey.Description);
    $('#price').val(whiskey.Price);
    $('#pic').attr('src', '' + whiskey.Picture);
    // $('#editModal').modal('show');
};


//Create/Update functions


var formToJSON = function () {
    var whiskeyId = $('#id').val();
    return JSON.stringify({
        "Id": whiskeyId === "" ? null : whiskeyId,
        //"Id": $('#id').val(),
        "Brand": $('#brand').val(),
        "Product": $('#product').val(),
        "Year": $('#year').val(),
        "Description": $('#description').val(),
        "Price": $('#price').val(),
        "Picture": ""
    });
};

var updateWhiskey = function () {
    console.log('updateWhiskey');
    $.ajax({
        type: 'PUT',
        contentType: 'application/json',
        url: rootURL + '/' + $('#id').val(),
        dataType: "json",
        data: formToJSON(),
        success: function (data, textStatus, jqXHR) {
            alert('Whiskey updated successfully');
            getWhiskies();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('updateWhiskey error: ' + textStatus);
        }
    });
};

var newWhiskey = function () {
    console.log('newWhiskey');
    $.ajax({
        type: 'POST',
        contentType: 'application/json',
        url: rootURL,
        dataType: "json",
        data: formToJSON(),
        success: function (data, textStatus, jqXHR) {
            alert('Whiskey created successfully');
            $('id').val(data.id);
            getWhiskies();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('newWhiskey error: ' + textStatus);
        }
    });
};

//Delete Functions
var deleteWhiskey = function () {
    console.log('deleteWhiskey');
    $.ajax({
        type: 'DELETE',
        url: rootURL + '/' + $('#id').val(),
        success: function (data, textStatus, jqXHR) {
            alert('Whiskey deleted successfully');
            getWhiskies();
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert('deleteWhiskey error');
        }
    });
};