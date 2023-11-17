import React, { useState } from 'react';
import styles from '../styles/styles.css';

const Login = () => {
  const [username, setUsername] = useState('');
  const [password, setPassword] = useState('');
  const [alertMessage, setAlertMessage] = useState('');

  const handleLogin = async () => {
    try {
      // Implement login logic (send a request to the server to verify credentials)
      // ...

      // For demonstration purposes, show a success message
      setAlertMessage('Login successful!');
    } catch (error) {
      console.error('Error:', error);
      setAlertMessage('Login failed. Check your credentials and try again.');
    }
  };

  const handleForgotPassword = async () => {
    try {
        const response = await fetch('http://localhost:5000/api/reset-password', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({ email }),
    });

    const data = await response.json();
    setAlertMessage(data.message || data.error);
  } catch (error) {
    console.error('Error:', error);
    setAlertMessage('Failed to send password reset email. Please try again.');
    }
  };

  return (
    <div className={styles.container}>
      <h1>Login</h1>
      {alertMessage && <p>{alertMessage}</p>}
      <div>
        <label>Username:</label>
        <input type="text" value={username} onChange={(e) => setUsername(e.target.value)} />
      </div>
      <div>
        <label>Password:</label>
        <input type="password" value={password} onChange={(e) => setPassword(e.target.value)} />
      </div>
      <button onClick={handleLogin}>Login</button>
      <button onClick={handleForgotPassword}>Forgot Password</button>
    </div>
  );
};

export default Login;
