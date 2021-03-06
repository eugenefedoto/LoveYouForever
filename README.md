# LoveYouForever

A creative playground for myself - based on the hit game and anime Amagami SS. It started out as a challenge to learn CSS Grid Layout and Docker. Soon it transformed into a playground, allowing me to test out new features and frameworks on a whim.

# Setup

1. `git clone https://github.com/eugenefedoto/LoveYouForever.git`

2. Install Docker from https://www.docker.com/get-started

   * Or Docker Toolbox (only for Windows) if Docker won't install due to not meeting minimum requirements.

   * I have Windows 10 Home, so I installed Toolbox. These instructions should work for both setups.

3. Run Docker Quickstart Terminal once in order to initialize Docker. You won't ever have to run it after.

4. Run `docker pull eugenefedoto/loveyouforever:v1`. It will save the eugenefedoto/loveyouforever image to Docker's disk.

5. Change into the directory that was created from `git clone`. You should be inside LoveYouForever.

6. `docker run -it -p 80:80 eugenefedoto/loveyouforever:v1`

7. Apache starts serving the files at http://192.168.99.100.
   * If you installed the non-Toolbox version of Docker, you can also use http://localhost.
