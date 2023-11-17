// pages/index.js
import React from 'react';
import Link from 'next/link';

const Home = () => {
  return (
    <div className="container">
      <header>
        <h1>Welcome to the Football Streaming Platform</h1>
      </header>

      <section className="feature">
        <h2>Search Filters</h2>
        {/* Add your search filter components here */}
      </section>

      <section className="feature">
        <h2>Subscription Management</h2>
        {/* Add your subscription management components here */}
      </section>

      <section className="feature">
        <h2>Upcoming Matches</h2>
        <ul>
          <li>Match 1 - Team A vs. Team B - Date and Time</li>
          <li>Match 2 - Team C vs. Team D - Date and Time</li>
          {/* Add more upcoming matches as needed */}
        </ul>
      </section>

      <section className="feature">
        <h2>Dark Mode</h2>
        {/* Add your dark mode toggle component here */}
      </section>

      <section className="feature">
        <h2>Like Button</h2>
        {/* Add your like button component here */}
      </section>
      <nav>
        <a
          href="https://www.youtube.com/watch?v=c7uUZwWPf_I&list=RDc7uUZwWPf_I&start_radio=1"
          className="cta-button"
          target="_blank"
          rel="noopener noreferrer"
        >
          Go to Live Match Streaming
        </a>
      </nav>
      <style jsx>{`
        .container {
          max-width: 800px;
          margin: 0 auto;
          padding: 20px;
        }

        header {
          text-align: center;
          margin-bottom: 20px;
        }

        .feature {
          margin-bottom: 30px;
        }

        ul {
          list-style: none;
          padding: 0;
        }

        li {
          margin-bottom: 10px;
        }

        .cta-button {
          display: inline-block;
          padding: 10px 20px;
          background-color: #0070f3;
          color: #fff;
          text-decoration: none;
          border-radius: 5px;
          font-weight: bold;
          transition: background-color 0.3s ease;
        }

        .cta-button:hover {
          background-color: #0056b3;
        }
      `}</style>
    </div>
  );
};

export default Home;
