export default class Artist{

    // Attributes

    private artistID:number;
    private artistName:string;

    // Constructor

    constructor(artistID:number, artistName:string) {
        this.artistID = artistID;
        this.artistName = artistName;
    }

    // Access Methods [Setters]

    set ArtistID(artistID:number){
        this.artistID = artistID;
    }
    set ArtistName(artistName:string){
        this.artistName = artistName;
    }

    // Access Methods [Getters]

    get ArtistID():number{
        return this.artistID;
    }
    get ArtistName():string{
        return this.artistName;
    }
    
}