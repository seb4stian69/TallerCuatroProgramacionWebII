export const getFunction = async(url) =>{

    try {
        
        return (
            fetch(url)
            .then( res => res.json() )
        )

    } catch (err) {
        console.error(err)
    }

}