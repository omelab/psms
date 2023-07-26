("use strict");

//numaric input only number fil
$(document).on("input", ".numeric", function () {
    this.value = this.value.replace(/[^0-9\.]/g, "");
});

//ajax with view response
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

//ajax call functions
function makeAjaxText(url, load = null) {
    return $.ajax({
        url: url,
        type: "get",
        cache: false,
        beforeSend: function () {
            if (typeof load != "undefined" && load !== null) {
                removeLoading(load);
                appendLoading(load, true);
            }
        },
    })
        .always(function () {
            if (typeof load != "undefined" && load !== null) {
                removeLoading(load);
            }
        })
        .fail(function () {
            swalError();
        });
}

//ajax post request with view response
function makeAjaxPostText(data, url, load = null) {
    return $.ajax({
        url: url,
        type: "post",
        data: data,
        cache: false,
        beforeSend: function () {
            if (typeof load != "undefined" && load !== null) {
                removeLoading(load);
                appendLoading(load, true);
            }
        },
    })
        .always(function () {
            if (typeof load != "undefined" && load !== null) {
                removeLoading(load);
            }
        })
        .fail(function () {
            swalError();
        });
}

//ajax get with json response
function makeAjax(url, load = null) {
    return $.ajax({
        url: url,
        type: "get",
        dataType: "json",
        cache: false,
        beforeSend: function () {
            if (typeof load != "undefined" && load !== null) {
                removeLoading(load);
                appendLoading(load, true);
            }
        },
    })
        .always(function () {
            if (typeof load != "undefined" && load !== null) {
                removeLoading(load);
            }
        })
        .fail(function () {
            swalError();
        });
}

//ajax post request with json response
function makeAjaxPost(data, url, load = null) {
    return $.ajax({
        url: url,
        type: "post",
        dataType: "json",
        data: data,
        cache: false,
        beforeSend: function () {
            if (typeof load != "undefined" && load !== null) {
                removeLoading(load);
                appendLoading(load, true);
            }
        },
    }).always(function () {
        if (typeof load != "undefined" && load !== null) {
            removeLoading(load);
        }
    });
    // .fail(function () {
    //     swalError();
    // });
}

//ajax post request with json response
function makeAjaxPatch(data, url, load = null) {
    return $.ajax({
        url: url,
        type: "PATCH",
        dataType: "json",
        data: data,
        cache: false,
        beforeSend: function () {
            if (typeof load != "undefined" && load !== null) {
                removeLoading(load);
                appendLoading(load, true);
            }
        },
    }).always(function () {
        if (typeof load != "undefined" && load !== null) {
            removeLoading(load);
        }
    });
}

//ajax post request with json response
function makeAjaxDelete(url, load = null) {
    return $.ajax({
        url: url,
        type: "DELETE",
        dataType: "json",
        cache: false,
        beforeSend: function () {
            if (typeof load != "undefined" && load !== null) {
                removeLoading(load);
                appendLoading(load, true);
            }
        },
    }).always(function () {
        if (typeof load != "undefined" && load !== null) {
            removeLoading(load);
        }
    });
}

//sweet alert error message
function swalError(
    msg,
    title = "Sorry !!",
    is_confirm = false,
    outsideClick = true
) {
    var message =
        typeof msg != "undefined" && msg !== null
            ? msg
            : "Something went wrong";
    Swal.fire({
        title: title,
        html: message,
        icon: "error",
        showConfirmButton: is_confirm,
        allowOutsideClick: outsideClick,
        timer: 4000,
    });
}

//sweet alert worning message
function swalWarning(msg) {
    var message =
        typeof msg != "undefined" && msg !== null
            ? msg
            : "Something went wrong";
    Swal.fire({
        title: "Warning !!",
        html: message,
        icon: "warning",
        showConfirmButton: false,
        // allowOutsideClick: false,

        // timer: 1000
    });
}

//sweet alert success message
function swalSuccess(msg) {
    var message =
        typeof msg != "undefined" && msg !== null
            ? msg
            : "Action has been Completed Successfully";
    Swal.fire({
        // position: 'top-end',
        icon: "success",
        title: "Successful !!",
        html: message,
        showConfirmButton: false,
        timer: 2500,
    });
}

//sweet alert redirect message
function swalRedirect(url, msg, mode) {
    var message =
        typeof msg != "undefined" && msg !== null
            ? msg
            : "Action has been Completed Successfully";
    var title = "Successful !!";
    var type = "info";
    if (typeof mode != "undefined" && mode !== null) {
        if (mode == "success") {
            var title = "Successful !!";
            var type = "success";
        } else if (mode == "error") {
            var title = "Failed !!";
            var type = "error";
        } else if (mode == "warning") {
            var title = "Warning !!";
            var type = "warning";
        } else if (mode == "question") {
            var title = "Warning !!";
            var type = "question";
        } else {
            var title = "Successful !!";
            var type = "info";
        }
    }
    return Swal.fire({
        title: title,
        html: message,
        icon: type,
        reverseButtons: true,
        showCancelButton: false,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Thank You",
        allowOutsideClick: false,
    }).then(function (s) {
        if (s.value) {
            if (typeof url != "undefined" && url !== null) {
                window.location.replace(url);
            } else {
                location.reload();
            }
        }
    });

    setTimeout(function () {
        window.location.replace(url);
    }, 100);
}

//sweet alert confirm message
function swalConfirm(msg) {
    var message =
        typeof msg != "undefined" && msg !== null
            ? msg
            : "You won't be able to revert this!";
    return Swal.fire({
        title: "Are you sure?",
        html: message,
        icon: "warning",
        reverseButtons: true,
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Confirm!",
        cancelButtonText: "Cancel",
        allowOutsideClick: false,
    });
}

/**
 * Get data from form fields as array
 */
function getFormData($form) {
    var formData = $form.serializeArray();
    var obj = {};
    formData.map(function (x) {
        obj[x.name] = x.value;
    });
    return obj;
}


/** Delete Confirm */
function deleteConfirm($id) {
    swalConfirm('sure to remove this').then(function (res) { 
        if (res.isConfirmed) {
            document.getElementById('delete-form'+$id).submit();
        }
    })
}