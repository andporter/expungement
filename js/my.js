function SendAjax(urlMethod, inData, returnFunction) {
    $.ajax({
        type: "POST",
        data: {"data": inData},
        dataType: "json",
        url: urlMethod,
        success: function (returnData)
        {
            console.log("Ajax Success!");
            console.log(returnData);

            if (returnData !== null && returnFunction !== "none")
            {
                returnFunction(returnData);
            }
        },
        error: function (xhr, status, error)
        {
            console.log("Ajax Error!");
            console.log(xhr);
            console.log(status);
            console.log(error);
        }
    });
}