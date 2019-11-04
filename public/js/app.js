const handleDeleteTag = (tagId) => {
    const url = 'http://127.0.0.1:8000/api/a/tag/' + tagId;
    const csrfToken = document.head.querySelector("[name=csrf-token]").content;

    const options = {
        method: 'DELETE',
        headers : {         
            'X-CSRF-TOKEN': csrfToken,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
       }
    };

    fetch(url, options)
        .then( response => response.json() )
        .then( data => data );

    location.reload();
}