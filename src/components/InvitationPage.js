const InvitationPage = () => {
    return (
      <div className="invitation-page">
        <header>
          <h1>Examensfest</h1>
          <h2>Välkommen till WIE22S Examensfestfest</h2>
        </header>
        <main>
          <section className="invitation-details">
            <h3>Ange din inbjudningskod</h3>
            <form action="../server/process_invitation.php" method="post">
              <input type="text" name="invitation_code" placeholder="Inbjudningskod" required />
              <button type="submit">Gå till inbjudan</button>
            </form>
            <div className="countdown">
              <h4> 20 maj 2024 13:00</h4>
              <div id="countdown-timer">
                
              </div>
            </div>
          </section>
        </main>
      </div>
    );
  };
  
  export default InvitationPage;