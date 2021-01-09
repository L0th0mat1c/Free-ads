<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $ads = new \App\Models\Ads();
        $ads->title = "Smart pas cher";
        $ads->description = "Bonjour vend une très belle smart toutes options toit panoramique gps siège chauffant full led,contrôle technique et entretien à jours rien à revoir pour plus de renseignements me contact pour ce qui sont pas intéressé s’abstenir merci.";
        $ads->price = 1300;
        $ads->photo_principale = "car1.jpg";
        $ads->categorie_id = 1;
        $ads->locate_id = 4;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "Chemise haute couture";
        $ads->description = "Vends chemise classique patchwork en soie imprimée « Jeu des Omnibus Chaînes » (100 % soie)

        - Patte de boutonnage et pied de col en twill uni
        - Patchwork imprimé « Jeu des Omnibus Chaînes »
        - Fermeture pied de col et patte de boutonnage cachée devant avec boutons en nacre
        
        Fabriqué en France";
        $ads->price = 460;
        $ads->photo_principale = "chemise1.jpg";
        $ads->categorie_id = 1;
        $ads->locate_id = 2;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "Jeans à vendre";
        $ads->description = "Le jean slim a toujours la cote cette saison et Jack & Jones l'a bien compris en nous présentant ce modèle. Sa coupe en fait un produit moderne et agréable. Une chose est sure : il fait partie des pièces maîtresses qui donnent le ton à une tenue et ce de façon naturelle.
        ";
        $ads->price = 49.99;
        $ads->photo_principale = "jean1.jpg";
        $ads->categorie_id = 1;
        $ads->locate_id = 2;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "Vends chaussure made in france";
        $ads->description = "Inspirée de la première AJ1, la chaussure Air Jordan 1 Mid propose aux fans des Jordan rétro de suivre les traces de la grandeur. La couleur inédite revisite les matières classiques épurées en ajoutant une touche de nouveauté à ce modèle familier.";
        $ads->price = 106;
        $ads->photo_principale = "shoe1.jpg";
        $ads->categorie_id = 1;
        $ads->locate_id = 3;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "Chaussure ASOS";
        $ads->description = "Chaussures par ASOS Tige en cuir Fermeture par lacets Bout fin Semelle texturée façon creeper Traiter avec un agent protecteur pour cuir Tige : 100% cuir véritable";
        $ads->price = 38.99;
        $ads->photo_principale = "shoe2.jpg";
        $ads->categorie_id = 1;
        $ads->locate_id = 1;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "Chausse de beau gosse";
        $ads->description = "Cette Sneakers - Basket streetwear sera parfait pour apporter une touche d'élégance et parfaire votre look afin d'être à la mode. Vous en avez marre de porter les même chaussures et sneakers que tout le monde? Vous voulez des baskets originale? Cette basket streetwear est idéale pour un look urbain branché. Elle peut être compléter n'importe quelle look urbain. Il sera idéale pour faire du sport, parfaire une tenue de sortie idéale ou juste pour une balade romantique. Nos chaussures sont ultra résistant et très durable. En plus d'être stylé et tendance, nos baskets sont unisexes et sont adaptées aux hommes et femmes. Cette chaussure s'adaptera à votre pied pour plus de confort. Pour bien entretenir votre baskets veuillez à ne pas le laissez sous la pluie ou la neige ou de le laver en machine. De plus sécher le convenablement à chaque lavage pour plus du résistance des tissus COMMANDEZ LE VOTRE MAINTENANT Sneakers style streetwear pour un look tendance. - Dessus : Cuir PU - Doublure: textile - Semelle : Matière synthétique - Disponible en plusieurs coloris";
        $ads->price = 15;
        $ads->photo_principale = 'shoe4.jpeg';
        $ads->categorie_id = 1;
        $ads->locate_id = 5;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "loue jolkzfhziehgizeufhizuehfizuehfiuzefe chien";
        $ads->description = "Loue jolie chien pour faire des promenandes en amoureux.";
        $ads->price = 15;
        $ads->photo_principale = 'shoe3.jpg';
        $ads->categorie_id = 1;
        $ads->locate_id = 5;
        $ads->user_id = rand(1,6);
        $ads->save();
        
        $ads = new \App\Models\Ads();
        $ads->title = "Cour de natations";
        $ads->description = "Nageur de haut niveau donne cours de natation (toutes nages) - niveau perfectionnement. Région Toulouse. Méthode proactive par l'exemple: Je serai à vos cotés dans l'eau pour tout vous montrer live.
        Méthodologie
        
        Je vous apprendrai à nager vite et sans effort. En 5 - 10 séances qui durent 1h vous apprendrez pas-à-pas les bases d'une excellente technique inspirée des plus grands champions.
        Vous apprendrez entre autres à synchroniser correctement la respiration et à acquérir un bon battement de pieds.
        Ma promesse: Vous nagerez techniquement bien, avec aisance et presque sans effort.";
        $ads->price = 15;
        $ads->photo_principale = 'swim1.jpg';
        $ads->categorie_id = 4;
        $ads->locate_id = 5;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "Tailleur professionnel";
        $ads->description = "Tailleur londonien professionnel propose ses services au plus offrant. Costume, demi-costume, chemise, haut de forme, entièrement sur mesure.";
        $ads->price = 15;
        $ads->photo_principale = 'tailor1.jpg';
        $ads->categorie_id = 4;
        $ads->locate_id = 5;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "Acheteur recherche villa de luxe";
        $ads->description = "Acheteur compulsif de biens immobilier recherche bien d'exception pour assouvir ses besoin de dépenses.";
        $ads->price = 999000;
        $ads->photo_principale = 'villa1.jpg';
        $ads->categorie_id = 3;
        $ads->locate_id = 5;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "Loue villa pour les vacances d'été";
        $ads->description = "Loue villa pour les vacances d'été, famille acceptés. Enfants sages exigés. Animaux de compagnie interdits.";
        $ads->price = 1;
        $ads->photo_principale = 'villa2.jpg';
        $ads->categorie_id = 4;
        $ads->locate_id = 5;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "Montre quatrz Fabergant";
        $ads->description = "Vend magnifique modèle unique de montre Fabergant, confectionnée au coeur de la suisse clichée.";
        $ads->price = 24000;
        $ads->photo_principale = 'watch1.jpg';
        $ads->categorie_id = 1;
        $ads->locate_id = 5;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "Montre cadran solaire antique nouvelle génération";
        $ads->description = "Vend magnifique montre cadran solaire antique nouvelle génération. Legit offer, please send your western union id.";
        $ads->price = 30;
        $ads->photo_principale = 'watch2.jpg';
        $ads->categorie_id = 1;
        $ads->locate_id = 5;
        $ads->user_id = rand(1,6);
        $ads->save();

        $ads = new \App\Models\Ads();
        $ads->title = "Vend montre Lataero";
        $ads->description = "Montre italienne, quasi pas portée, en parfaite état. Non sérieux s'abstenir";
        $ads->price = 1500;
        $ads->photo_principale = 'watch3.jpg';
        $ads->categorie_id = 1;
        $ads->locate_id = 5;
        $ads->user_id = rand(1,6);
        $ads->save();
    
        $ads = new \App\Models\Ads();
        $ads->title = "Cours de yoga tout niveaux";
        $ads->description = "YOGA dans la ville , une ATTITUDE à adopter pour vous sentir mieux YOGINI PREMA, . ETRE BIEN !;;;;;BOUGER MIEUX!.....dans toutes situations au travers du Prana ou Souffle de vie et le lien entre";
        $ads->price = 99;
        $ads->photo_principale = 'yoga_lesson.jpeg';
        $ads->categorie_id = 4;
        $ads->locate_id = 5;
        $ads->user_id = rand(1,6);
        $ads->save();
    }
}
