const { mwn } = require( 'mwn' );

site = mwn.site('lol.fandom.com', path='/')

Response = site.api('cargoquery',
limit = 'max',
tables = "ScoreboardGames=SG",
fields = "SG.Tournament, SG.DateTime_UTC, SG.Team1, SG.Team2"
);

document.createElement('div') = Response;