<template>
 <section class="about container-fluid p-0">
    <div class="row align-items-center  animate__fadeIn animate__animated">
    <header class="col-12 animate__slideInLeft animate__animated blue--bg d-flex align-self-center justify-self-center">
        <h1 class="m-auto text-center align-self-center justify-self-center">{{ $route.name }}</h1>
      </header>
    </div>
    <div class="row align-items-center container text-left m-auto no-gutters vh-50">
      <div class="col-12 animate__slideInRight animate__animated p-4">       
        <div  class="row">
          <div  class="col-xs-6 col-md-4">
            <div  id="list-tab" role="tablist" class="list-group"><a  id="list-yaskawa-list" data-toggle="list" href="#list-yaskawa" role="tab" aria-controls="yaskawa" class="list-group-item list-group-item-action" aria-selected="false">Yaskawa</a><a  id="list-attc-list" data-toggle="list" href="#list-attc" role="tab" aria-controls="attc" class="list-group-item list-group-item-action active show" aria-selected="true">ATTC - American Torch Tip</a><a  id="list-sincosald-list" data-toggle="list" href="#list-sincosald" role="tab" aria-controls="sincosald" class="list-group-item list-group-item-action">Sincosald</a><a  id="list-sprut-list" data-toggle="list" href="#list-sprut" role="tab" aria-controls="sprut" class="list-group-item list-group-item-action">Sprutcam</a></div></div><div  class="col-8"><div  id="nav-tabContent" class="tab-content"><div  id="list-yaskawa" role="tabpanel" aria-labelledby="list-yaskawa-list" class="tab-pane fade">

YASKAWA este o companie de oameni care își urmăresc pasiunea - condusă de viziunea unui viitor mai inteligent, cu tehnologii avansate care economisesc timp și energie prețioase. Și pentru noi, orice zi este o nouă șansă de a face progrese.

                 Scopul nostru este să contribuim la evoluția societății prin îmbunătățirea naturii afacerii sale, creșterea performanței și productivității industriei noastre și, prin urmare, a vieții noastre de zi cu zi. În mod natural, promovăm resurse regenerabile pentru a asigura un mediu sănătos - pentru o planetă durabilă pentru noi toți.
                
                 Cu sediul în Eschborn, Germania, YASKAWA Europe oferă soluții de mecatronică și robotică pentru companii din Europa, Orientul Mijlociu, Africa și statele CSI. Având filiale în aceste regiuni și site-uri de producție europene, suntem aproape de cerințele piețelor.


                </div><div  id="list-attc" role="tabpanel" aria-labelledby="list-attc-list" class="tab-pane fade active show">
În 1940, John Walters Sr. și un grup de oameni de afaceri au văzut nevoia de sfaturi de înlocuire a torței de calitate și au creat American Torch Tip. Inovația, cercetarea și design-urile mai bune au fost elementele de bază ale primilor ani și încă păstrăm fidelitatea acestei filozofii astăzi.

Astăzi producem mii de articole, inclusiv arme, torțe, consumabile și piese de schimb pentru 6 platforme - sisteme cu plasmă, MIG, combustibil oxigen, TIG, spray termic și laser.

              </div><div  id="list-sincosald" role="tabpanel" aria-labelledby="list-sincosald-list" class="tab-pane fade">SINCOSALD Srl a fost fondată în 1950 cu numele SINCO, ca o companie de familie care lucrează în domeniul sculelor.
În primii ani, SINCO a început o mică producție de încărcătoare de baterii, oferind posibilitatea implantării unui laborator real, ajungând la primul proiect real de sursă de energie pentru sudarea electrodului. În 1960 a fost produsă prima sursă de alimentare combinată, pentru electrod (MMA) și sârmă (MIG / MAG).
În 1970, a fost produsă prima mașină de sudare semi-automată care a fost prima dintr-o serie lungă care continuă până în prezent.</div><div  id="list-sprut" role="tabpanel" aria-labelledby="list-sprut-list" class="tab-pane fade">
                SPRUT Technology a dezvoltat și implementat produse software CAM / MES / MRP / CAPP încă din 1993. Cu toate acestea, călătoria noastră în activitatea de software a început de fapt în 1986. De-a lungul anilor am dezvoltat o înțelegere largă pe care o aplicăm la crearea întregului software produse.

De-a lungul acestor ani, mii și mii au devenit clienții noștri fericiți. Pe baza feedback-ului lor, putem spune cu mândrie că am realizat multe.

Astăzi suntem încântați să vă putem oferi soluțiile noastre, precum și cunoștințele și experiența noastră, care sunt încorporate în familia de produse software SPRUT.
              </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name:'products',
  components: {
  },
  methods:{
  },
}
</script>

<style lang="scss" scoped>
header{
  min-height:30vh;
}
.vh-50{
  min-height: 50vh;
}
</style>
