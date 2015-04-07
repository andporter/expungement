function SendAjax(urlMethod, inData, returnFunction) {
    $.ajax({
        type: "POST",
        data: {"data": inData},
        dataType: "json",
        url: urlMethod,
        success: function (returnData)
        {
            console.log("Ajax Success! URL: " + urlMethod);

            if (returnData !== null && returnFunction !== "none")
            {
                returnFunction(returnData);
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