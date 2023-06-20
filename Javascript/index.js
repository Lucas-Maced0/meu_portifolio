

function ApiGitHub () {
    fetch ('https://api.github.com/users/Lucas-Maced0')
    .then (response => {
            response.json()
            .then(data => {
                console.log(data)
            })
        })
}