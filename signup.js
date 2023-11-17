import React, { useState } from 'react';
import styles from '../styles/styles.css';
const Signup = () => {
  const [username, setUsername] = useState('');
  const [password, setPassword] = useState('');
  const [email, setEmail] = useState('');
  const [fullName, setFullName] = useState('');
  const [alertMessage, setAlertMessage] = useState('');

  const handleSignup = async () => {
    try {
      const response = await fetch('http://localhost:5000/api/signup', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ username, password, email, fullName }),
      });

      const data = await response.json();
      setAlertMessage(data.message || data.error);
    } catch (error) {
      console.error('Error:', error);
      setAlertMessage('Internal Server Error');
    }
  };

  return (
    <div className={styles.container}>
      <h1>Create Account</h1>
      {alertMessage && <p>{alertMessage}</p>}
      <div>
        <label>Username:</label>
        <input type="text" value={username} onChange={(e) => setUsername(e.target.value)} />
      </div>
      <div>
        <label>Email:</label>
        <input type="email" value={email} onChange={(e) => setEmail(e.target.value)} />
      </div>
      <div>
        <label>Password:</label>
        <input type="password" value={password} onChange={(e) => setPassword(e.target.value)} />
      </div>
      <div>
        <label>Full Name:</label>
        <input type="text" value={fullName} onChange={(e) => setFullName(e.target.value)} />
      </div>
      <button onClick={handleSignup}>Create Account</button>
    </div>
  );
};

export default Signup;
