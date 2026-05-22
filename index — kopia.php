<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Szkolenia i kursy</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <header>
        <h1>SZKOLENIA</h1>
    </header>
    <main>
        <section id="lewa">
            <table>
                <tr>
                    <th>Kurs</th>
                    <th>Nazwa</th>
                    <th>Cena</th>
                </tr>
            </table>
        </section>
        <section id="prawa">
            <h2>Zapisy na kursy</h2>
            <form action="index.php" method="POST">
                <label for="imie">Imię</label>
                <br>
                <input type="text" id="imie" name="imie">
                <br>
                <label for="nazwisko">Nazwisko</label>
                <br>
                <input type="text" id="nazwisko" name="nazwisko">
                <br>
                <label for="wiek">Wiek</label>
                <br>
                <input type="number" id="wiek" name="wiek">
                <br>
                <label for="rodzajKursu">Rodzaj kursu</label>
                <br>
                <select id="rodzajKursu" name="rodzajKursu">
                    
                </select>
                <button name="submit">Dodaj dane</button>
            </form>
            
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: </p>
    </footer>
</body>

</html>