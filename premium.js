import React, { useState } from 'react';
import styles from '../styles/styles.css'; // Import the CSS file

const Premium = () => {
    const [subscriptionType, setSubscriptionType] = useState('basic'); // Default to basic subscription

    const handleSubscriptionChange = (type) => {
        setSubscriptionType(type);
    };

    const handleSubscribe = () => {
        // Implement subscription logic (send a request to the server to upgrade user's subscription)
        // ...

        // For demonstration purposes, show a success message
        alert(`Successfully subscribed to ${subscriptionType} subscription!`);
    };

    return (
        <div className={styles.container}>
            <h1>Premium Subscription</h1>
            <div className={styles.alert}>
                <p>Current Subscription: {subscriptionType}</p>
            </div>
            <div>
                <label>Choose Subscription Type:</label>
                <select value={subscriptionType} onChange={(e) => handleSubscriptionChange(e.target.value)}>
                    <option value="basic">Basic</option>
                    <option value="premium">Premium</option>
                    <option value="ultimate">Ultimate</option>
                </select>
            </div>
            <button onClick={handleSubscribe}>Subscribe</button>
        </div>
    );
};

export default Premium;
