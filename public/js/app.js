const handleDeleteTag = (tagId) => {
    const url = 'http://127.0.0.1:8000/api/a/tag/' + tagId;

    const options = {
        method: 'DELETE',
        headers : {         
            'Content-Type': 'application/json',
            'Accept': 'application/json'
       }
    };

    fetch(url, options)
        .then( response => response.json() )
        .then( data => data );

    location.reload();
}

const handleDeleteArticle = (articleId) => {
    const url = 'http://127.0.0.1:8000/api/a/article/' + articleId;

    const options = {
        method: 'DELETE',
        headers : {         
            'Content-Type': 'application/json',
            'Accept': 'application/json'
       }
    };

    fetch(url, options)
        .then( response => response.json() )
        .then( data => data );

    location.reload();
}