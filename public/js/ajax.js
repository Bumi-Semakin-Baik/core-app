function requestAjax(method, path, payload, callback) {
    $.ajax({
        method: "GET",
        url: baseUrl + "/api-cockpit/setting",
        contentType: false,
        cache: true,
        processData: false,
        dataType: "json",
        data: payload,
        statusCode: {
            200: function (json) {
                callback(json)
            },
        }
    })
}