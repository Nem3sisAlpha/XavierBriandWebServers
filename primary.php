<!DOCTYPE html>
<html>
    <head>
        <title>Picturez</title>
    </head>
    <body>
        <h1>Hello There</h1>
        <h3>If you are here, it means the Bird of Judgement has approved your passage</h3>

        <h4>The subject of this website evolves around the many types of photography that I do as a passion</h4>
        <h4>Here they are:</h4>
        <ul>
            <li>Wildlife</li>
            <li>Nature</li>
            <li>Just my cat</li>
            <li>Astrophotography</li>
        </ul>

        <h2>Wildlife</h2>
        <p>
            Photography is a very interesting passion where you can frame moments of your life and talk about the memories that come with it.
            I love photography because I love nature and I think that, even though it is getting progressively destroyed, there are still beautiful things that can be found in nature.
            I have always loved birds since I was very young. I loved reading and admiring them, imagining the feeling of liberty that flying could give us.
            I recently thought about making a book/document where I place images of the many birds I've found and photographed so I can explain the context, the race and everything that could be found in an ornithologist's book
        </p>
        <img src="https://github.com/Nem3sisAlpha/XavierBriandWebServers/blob/main/Images%20Lab%201/VAX00985.jpg?raw=true" width="800" height="1200"/>
        <h5>I love this image because of all the details we can see on the little bird</h5>

        <h2>Nature</h2>
        <p>
            Staying in the topic of nature, I love everything that has contrasting colours or just colours in general. So for me, taking pictures of flowers is a thing that I really enjoy since the vibrance of the colours obviously attracts the eyes of many.
            I also enjoy taking pictures of landscapes, where we can see the imensity of what we are destroying so heartlessly. Nature is beautiful and it should be preserved, otherwise, this could mean our own doom.
        </p>
        <img src="https://github.com/Nem3sisAlpha/XavierBriandWebServers/blob/main/Images%20Lab%201/VAX02823.jpg?raw=true" width="800" height="1200"/>
        <h5>Might not be a flower, but this picture was taken in March 2020, right before COVID hit and I love the blur in the background putting the emphasis on the buds</h5>

        <h2>Just my cat</h2>
        <p>            
            When looking at the trending battle of Cats VS. Dogs, I always find myself turning around for cats... AND I HAVE REASONS DON'T HATE FOR THAT. I love cats because there are loving and crazy, and I think that it corresponds to me perfectly.
            I can be crazy when I can and want to and I also love the people around me and try to cherrish the relationships that I share with them, may it be family, friends or romantic partners. I also love that there are independant. I am very independant myself too
            and love to have my own bubble from time to time just to think about nothing and everything all at once. The cat that I take pictures of has been in my life for about 14 years and I want to remember every moments that I shared with him as reality is that
            our time together might not last forever.
        </p>
        <img src="https://github.com/Nem3sisAlpha/XavierBriandWebServers/blob/main/Images%20Lab%201/VAX04056.jpg?raw=true" width="800" height="1200"/>
        <h5>This is the cat I've mentioned previously, I love this picture because we can see the Christmas lights reflecting in his eyes, and I love reflections!</h5>

        <h2>Astrophotography</h2>
        <p>
            It is a different aspect of photography that I have discovered only but recently. I find it to be quite impressive to be able to see object that are years away from us so clearly. I wish I had known more about this branch of photography, but my knowledge is
            limited to the pictures that I have.
        </p>
        <img src="https://github.com/Nem3sisAlpha/XavierBriandWebServers/blob/main/Images%20Lab%201/VAX01239.jpg?raw=true" width="1200" height="800"/>
        <h5>This is an image of Jupiter where we can see not only the planet, but also 4 of its moons</h5>


        <h5>For more images, click on this link!</h5>
        <a href="secondary.html">Next Page</a>  

        <h5>To see the crazy amount of pictures I can take in a month, click this link!</h5>
        <a href="datatable.php">Schedule</a>  

        <p>There's not much here, so here's an amazing link for you!</p>

        <a href="#amazing link">Teleport to the amazing link!</a>

        </br></br></br></br></br></br></br></br></br></br></br>
    
    
        <script>
            function alertbtn() {
                alert("YOU'VE BEEN ACCUSED OF STEALING PICTURES...\nTHAT IS A NO NO");
            }

            function clickin() {
                document.getElementById("Nope").innerHTML = "CLIIICK MEEEE OOOOOOOOOON";
            }

            function visibility() {
                var x = document.getElementById("AngryPingu");
                if (x.style.display === "none") {
                    x.style.display = "block";
                }
                else {
                    x.style.display = "none";
                }
            }

            function imgchg() {
                document.getElementById("Game").src = "https://github.com/Nem3sisAlpha/XavierBriandWebServers/blob/main/Images%20Lab%204/Ori2.jpg?raw=true";
            }

            function btntxtchg(version2) {
                version2.innerHTML = "You really needed to do that for your own satisfaction right?";
            }

            function requried() {
                document.getElementById("focus").innerHTML = ("This field is required");
            }
            
            function ajax() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("ajax").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "ajax.txt", true);
                xhttp.send();
            }

        </script>

        <button onclick="alertbtn()">COPYRIGHT STRIKE</button>
        
        </br></br></br>

        <button onclick="clickin()">CLICK ON MEEEEEE (Sang the same way as Take On Me)</button>
        <p id="Nope" ></p>

        <button onclick="visibility()">YEET IN OR OUT?</button>
        </br></br>
        <div id="AngryPingu">
            <button>Custom</button>
        </div>

        </br></br></br></br>

        <button onclick="imgchg()">See another image of this beautiful game?</button>
        </br></br>
        <img id="Game" src="https://github.com/Nem3sisAlpha/XavierBriandWebServers/blob/main/Images%20Lab%204/Ori1.jpg?raw=true" width="1080" height="720"/>

        </br></br></br></br>

        <button onclick="btntxtchg(this)">You did not see me.....</button>
    
        </br></br></br></br>

        <p>Do you like this website?</p>
        <input type="text" onblur="requried()">
        <p id="focus"></p>

        </br></br></br></br>

        <p id="ajax">Do you wat to see what AJAX is capable of?</p>
        <button onclick="ajax()">Magic!</button>

        </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>


        <div id="amazing link">
        <a href="https://www.instagram.com/p/Cvk7HXbRsRq/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==" target="_blank">Amazing link!</a>
        </div>
    </body>
</html>