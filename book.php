<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.box-container {
    text-align: center;
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    justify-content: center; 
    align-items: center; 
}

.box-container .box {
    border: 1px solid #ccc;
    padding: 20px;
    max-width: 400px; 
    flex: 1 1 30rem;
    border-radius:  .5rem;
    overflow: hidden;
    box-shadow: 0 1rem 2rem rgba(0, 0, 0,.1);
}

.box-container .box img {
    display: block;
    margin: 0 auto; 
    max-width: 100%; 
    height: 25rem; 
    object-fit: cover;
}

.box-container .box .content{
    padding: 2rem;
}

.box-container .box .content h3 {
    font-size: 2rem;
    color: black;
}
.box-container .box .content p {
    font-size: 1.7rem;
    color: #af4c7d;
    padding: 1rem 0;
}

.box-container .box .content .price{
    font-size: 2rem;
    color: black;
    padding-top: line-through;

}

.stars {
    color: #ffd700;
    font-size: 24px;
}

.stars i {
    margin-right: 5px; 
}

button {
    background-color: #af4c7d;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	margin-top: 10px;
}

button:hover {
    background-color:aquamarine;
}


    </style>
   
    <div class="box-container">

        <div class="box">
            <img src="istanbul.jpg.jpg" alt="">
            <h3> Istanbul </h3>
            <p>Paketa jone e Stambollit permban guiden ne vendet me turistike si : Dolmabahce Palace, Galata Tower, Grand Bazaar dhe shume te tjera.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $100.00 <del>$150.00</del></div>
            <button type="submit">Rezervo Tani</button>
        </div>

        <div class="box">
            <img src="paris.jpg.jpg" alt="">
            <h3> Paris </h3>
            <p>Parisi madheshtor vjen ne paketen tone si kurr me pare duke perfshire: Museun e Luvrit, Kulla Eiffel, Katedralja e Notredamit e shume vende tjera  .</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $130.00 <del>$190.00</del></div>
            <button type="submit">Rezervo Tani</button>
        </div>

        <div class="box">
            <img src="prague.jpg.jpg" alt="">
            <h3> Prague </h3>
            <p>Praga e lashte vjen kete her ne oferten me te mire te perfshira në të vendet si: Keshtjella e Prages, Charles Bridge, Qyteti i vjeter i Prages, Kopshtin zologjik dhe shume atraksione tjera.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $110.00 <del>$140.00</del></div>
            <button type="submit">Rezervo Tani</button>
        </div>
        <div class="box">
            <img src="amsterdam.jpg.jpg" alt="">
            <h3> Amsterdam </h3>
            <p>Amsterdami i veqant ka te perfshire ne paket: Museun e Van Gogh, Shtepia e Anne Frank, Pallatin Mbreteror te Amsterdamit dhe shum surpriza te tjera.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $120.00 <del>$160.00</del></div>
            <button type="submit">Rezervo Tani</button>
        </div>
        <div class="box">
            <img src="frankfurt.jpg.jpg" alt="">
            <h3> Frankfurt </h3>
            <p>Frankfurti vjen me paket ku ne te ka te perfshire: Qytetin e vjerter, Romer(City Hall), Main Tower me kulle observuese.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $100.00 <del>$190.00</del></div>
            <button type="submit">Rezervo Tani</button>
        </div>
        <div class="box">
            <img src="london.jpg.jpg" alt="">
            <h3> London </h3>
            <p>Londra me atraksionet e saj vjen kete here me: Pallatin Mbreteror Buckingham, Muzeun Britanez, Tower Bridge.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $150.00 <del>$170.00</del></div>
            <button type="submit">Rezervo Tani</button>
        </div>
        <div class="box">
            <img src="prishtina.jpg.jpg" alt="">
            <h3> Prishtina </h3>
            <p>Prishtina jone therret vizitoret me paketat qe perfshijne: Teatrin Kombetar, Xhamia e Madhe, Katedralja e Nene Terezes</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $80.00 <del>$100.00</del></div>
            <button type="submit">Rezervo Tani</button>
        </div>
        <div class="box">
            <img src="vienna.jpg.jpg" alt="">
            <h3> Vienna </h3>
            <p>Vienna vjen me: Katedralen e Shen Stefanit, Museu i Historis, Hofburg.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $90.00 <del>$150.00</del></div>
            <button type="submit">Rezervo Tani</button>
        </div>
        <div class="box">
            <img src="zurich.jpg.jpg" alt="">
            <h3> Zurich </h3>
            <p>Ne Zurich ndodhen atraksione te ndryshme si: Shtepia e madhe e qokollates Lindt, Kopshti Zologjik, Grossmunster.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="price"> $130.00 <del>$170.00</del></div>
            <button type="submit">Rezervo Tani</button>
        </div>
    </div>
    
</body>
</html>