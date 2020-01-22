# SPA demo - prohlížení článků

Demo SPA pro prohlížení automaticky vygenerovaných článků.

## Featury
* zobrazení seznamu článků a kategorií
* zobrazení detailu článku
* smazaní článku
* filtrování článků v kategorii

## Spuštění
1. `composer install`
2. `npm install`
3. `touch storage/app/database.sqlite` (pro windows `type nul > .\storage\app\database.sqlite`)
4. přejmenovat soubor `.env.example` na `.env`
5. vyplnit absolutní cestu v souboru `.env` k vytvořenému `database.sqlite`
6. `php artisan migrate:refresh` - vytvoření tabulek
7. `php artisan db:seed` - generování testovacích dat
8. `php artisan key:generate`
9. `npm run dev`
10. `php artisan serve`
11. otevřít aplikaci na `http://127.0.0.1:8000/`, popř. jiné URL, kterou vrátí předchozí příkaz
