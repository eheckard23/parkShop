<?php

use Illuminate\Database\Seeder;
use App\Artist;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artist = new Artist([
        	'artist_name' => 'Radiohead',
            'artist_site' => 'https://www.radiohead.com/deadairspace',
            'artist_genre' => 'Rock',
            'artist_bio' => "Radiohead are an English rock band from Abingdon, Oxfordshire, formed in 1985. The band consists of Thom Yorke (vocals, guitar, piano, keyboards), Ed O'Brien (guitar, backing vocals), Phil Selway (drums, percussion, backing vocals), and brothers Jonny Greenwood (lead guitar, keyboards, other instruments) and Colin Greenwood (bass). They have worked with producer Nigel Godrich and cover artist Stanley Donwood since 1994. After signing to EMI in 1991, Radiohead released their debut single 'Creep' in 1992. It became a worldwide hit after the release of their debut album, Pablo Honey (1993). Their popularity and critical standing rose in the United Kingdom with the release of their second album, The Bends (1995). Radiohead's third album, OK Computer (1997), propelled them to international fame; noted for its complex production and themes of modern alienation, it is often acclaimed as a landmark record of the 1990s and one of the best albums in popular music. The group's next albums Kid A (2000) and Amnesiac (2001), recorded simultaneously, marked a dramatic change in style, incorporating influences from experimental electronic music, 20th-century classical music, krautrock, and jazz. Kid A divided listeners but was named the best album of the decade by Rolling Stone, Pitchfork and the Times. Radiohead's sixth album, Hail to the Thief (2003), mixed rock and electronic music with lyrics inspired by the War on Terror, and was the band's final album for EMI. Their subsequent releases have pioneered alternative release platforms such as pay-what-you-want and BitTorrent; Radiohead self-released their seventh album, In Rainbows (2007), as a download for which customers could set their own price, to critical and chart success. Their eighth album, The King of Limbs (2011), an exploration of rhythm, was developed using extensive looping and sampling. A Moon Shaped Pool (2016) prominently featured Jonny Greenwood's orchestral arrangements. Radiohead had sold more than 30 million albums worldwide by 2011. Their work places highly in both listener polls and critics' lists of the best music of the 1990s and 2000s. In 2005, they were ranked 73rd in Rolling Stone's list of 'The Greatest Artists of All Time'; Jonny Greenwood (48th) and O'Brien (59th) were both included in Rolling Stone's list of greatest guitarists, and Yorke (66th) in their list of greatest singers. In 2009, Rolling Stone readers voted the group the second-best artist of the 2000s. In 2017, they were nominated for induction into the Rock & Roll Hall of Fame, in their first year of eligibility.",
            'artist_img' => 'https://littlebylisten.files.wordpress.com/2016/06/radiohead-promo.jpg'

        ]);

        $artist->save();

        // $artist = new Artist([
        //     'artist_name' => 'Grizzly Bear',
        //     'artist_site' => 'http://grizzly-bear.net/',
        //     'artist_genre' => 'Indie',
        //     'artist_bio' => "Grizzly Bear is an American rock band from Brooklyn, New York, formed in 2002. The band consists of Edward Droste (vocals, guitar, keyboards, omnichord), Daniel Rossen (vocals, guitar, banjo, keyboards), Chris Taylor (bass, backing vocals, various instruments, producer), and Christopher Bear (drums, backing vocals). The band employs traditional and electronic instruments. Their sound has been categorized as psychedelic pop, folk rock, and experimental, and is dominated by the use of vocal harmonies. Their music is very heavily featured in the film Blue Valentine (2010), directed by Derek Cianfrance. It is also featured in the british tv series 'Skins' (2008)",
        //     'artist_img' => 'http://img.wennermedia.com/social/rs-grizzly-bear-0d893b41-0bf6-4b43-ad59-ce6aa1aa0a22.jpg'

        // ]);

        // $artist->save();

        // $artist = new Artist([
        //     'artist_name' => 'Primus',
        //     'artist_site' => 'http://primusville.com/splash/',
        //     'artist_genre' => 'Rock',
        //     'artist_bio' => "Primus is an American rock band based in San Francisco, California, currently composed of bassist/vocalist Les Claypool, guitarist Larry 'Ler' LaLonde and drummer Tim 'Herb' Alexander. Primus originally formed in 1984 with Claypool and guitarist Todd Huth, later joined by drummer Jay Lane, though the latter two departed the band at the end of 1988. Featuring LaLonde and Alexander, Primus recorded their debut Suck on This in 1989, followed by four studio albums: Frizzle Fry, Sailing the Seas of Cheese, Pork Soda, and Tales from the Punchbowl. Alexander left the band in 1996, replaced by Bryan 'Brain' Mantia, and Primus went on to record the original theme song for the TV show South Park and two more albums, Brown Album and Antipop, before declaring a hiatus in 2000. In 2003, Claypool and LaLonde reunited with Alexander and released a DVD/EP, Animals Should Not Try to Act Like People, before touring sporadically through 2009. In 2010, Lane rejoined Primus, replacing Alexander, and the band released their seventh album, Green Naugahyde, in 2011. In 2013, Lane left the band to focus on other projects, and Tim Alexander rejoined once again. They have released some of their records on Claypool's own label Prawn Song Records. Primus is characterized by its irreverent, quirky approach to music. Robert Christgau once remarked: '[Primus is] quite possibly the strangest top-10 band ever, and good for them.'",
        //     'artist_img' => 'https://www.eventsfy.com//assets/images/artists/primus2.jpg'

        // ]);

        // $artist->save();
    }
}
