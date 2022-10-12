export default class Genre{

    // Attributes

    private genreID:number;
    private genre:string;

    // Constructor

    constructor(genreID:number, genre:string) {
        this.genreID = genreID;
        this.genre = genre;
    }

    // Access Methods [Setters]

    set GenreID(genreID:number){
        this.genreID = genreID;
    }
    set Genre(genre:string){
        this.genre = genre;
    }

    // Access Methods [Getters]

    get GenreID():number{
        return this.genreID;
    }
    get Genre():string{
        return this.genre;
    }
    
}