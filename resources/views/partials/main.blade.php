<main>
    <div class="container">
      <DcCard
        v-for="objCard in arrCards"
        :key="objCard.titolo"
        class="card"
        :card="objCard"
      />
    </div>
</main>
