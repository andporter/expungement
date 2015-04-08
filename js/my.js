function SendAjax(urlMethod, postJSONData, returnFunction) {
    $.ajax({
        type: "POST",
        data: {"data": postJSONData},
        dataType: "json",
        url: urlMethod,
        success: function (returnJSONData)
        {
            console.log("Ajax Success! URL: " + urlMethod);

            if (returnJSONData !== null && returnFunction !== "none")
            {
                returnFunction(returnJSONData);
            }
        },
        error: function (xhr, status, error)
        {
            console.log("Ajax Error! URL: " + urlMethod);
            console.log(xhr);
            console.log(status);
            console.log(error);
        }
    });
}