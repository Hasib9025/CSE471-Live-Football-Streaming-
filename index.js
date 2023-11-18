// pages/index.js
import React from 'react';
import Link from 'next/link';


const Home = () => {
  return (
    
    <div className="container">
      <header>
        
        <div className="search-bar">
          <input type="text" className="search-input" placeholder="Search..." />
          <div className="search-icon">🔍</div>
        </div>
        <div className="user-options">
          <a href="/profile" className="user-option">My Profile</a>
          <a href="C:\Users\RUHANI\Desktop\football-streaming\src\pages\notification.js" className="user-option">Notification</a>
          <a href="/settings" className="user-option">Settings</a>
        </div>
      </header>

      <div className="upcoming-matches">
        <h2>Upcoming Matches</h2>
        <table className="upcoming-matches-table">
          <thead>
            <tr>
              <th>Date</th>
              <th>Match</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2023-11-20</td>
              <td>PSG vs FCB</td>
            </tr>
            <tr>
              <td>2023-11-21</td>
              <td>RMA vs ACM</td>
            </tr>
            
          </tbody>
        </table>
      </div>

      <div className="live-football">
        <h2>Watch Live Football Match</h2>
        <iframe
          width="560"
          height="315"
          src="https://www.youtube.com/embed/SNXjGysR5CU"
          title="Live Football Match"
          frameBorder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowFullScreen
        ></iframe>
      </div>
 
   

      <div className="subscription-button">
        <Link href="/subscription.html">Subscribe Now</Link>
      </div>






      <div className="league-selection">
        <h3>Select League</h3>
        <div className="league-options">
          <a href="https://www.google.com/search?q=Laliga+live+match&rlz=1C1CHBF_enBD1066BD1066&oq=Laliga+live+match+&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHC
          AEQABiABDIHCAIQABiABDIHCAMQABiABDIHCAQQABiABDIHCAUQABiABDIICAYQABgWGB4yCAgHEAAYFhgeMggICBAAGBYYHjIICAkQABgWGB7SAQk4ODAyajBqMTWoAgCwAgA&sourceid=chrome&ie=UTF-8#sie=lg;/g/11khrmf0s3;2;/m/09gqx;mt;fp;1;;;" className="league-option">La Liga</a>
          <a href="/uefa" className="league-option">UEFA</a>
          <a href="/european-league" className="league-option">European League</a>
        </div>
      </div>
    </div>
  );
};

export default Home;
