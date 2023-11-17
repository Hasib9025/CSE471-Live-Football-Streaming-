const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const PORT = process.env.PORT || 5000;
const nodemailer = require('nodemailer');
const transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'h.hasib2000@gmail.com',
    pass: '123123Hasib',
  },
});

app.post('/api/reset-password', async (req, res) => {
  const { email } = req.body;

  try {
    const mailOptions = {
      from: 'h.hasib2000@gmail.com',
      to: email,
      subject: 'Password Reset Request',
      text: 'Click on the link to reset your password: http://localhost:3000/reset-password',
    };

    await transporter.sendMail(mailOptions);

    // For demonstration purposes, show a success message
    return res.status(200).json({ message: 'Password reset email sent!' });
  } catch (error) {
    console.error(error);
    return res.status(500).json({ error: 'Internal Server Error' });
  }
});
const userSchema = new mongoose.Schema({
    username: String,
    email: String,
    password: String,
    fullName: String,
    subscriptionType: String, // Add subscriptionType field
});

const User = mongoose.model('User', userSchema);
app.post('/api/subscribe', async (req, res) => {
    const { username, subscriptionType } = req.body;

    try {
        const user = await User.findOneAndUpdate(
            { username },
            { $set: { subscriptionType } },
            { new: true }
        );

        if (!user) {
            return res.status(404).json({ error: 'User not found' });
        }

        return res.status(200).json({ message: `Subscription updated to ${subscriptionType}` });
    } catch (error) {
        console.error(error);
        return res.status(500).json({ error: 'Internal Server Error' });
    }
});

app.use(cors());
app.use(bodyParser.json());

// Connect to MongoDB (replace 'your-mongodb-uri' with your MongoDB connection URI)
mongoose.connect('mongodb+srv://hasib2000:<123123Hasib>@cluster0.8syzx0j.mongodb.net/?retryWrites=true&w=majority', { useNewUrlParser: true, useUnifiedTopology: true });

const userSchema = new mongoose.Schema({
  username: String,
  email: String,
  password: String,
  fullName: String
});

const User = mongoose.model('User', userSchema);

app.post('/api/signup', async (req, res) => {
  const { username, password, email, fullName } = req.body;

  if (username === 'Admin') {
    return res.status(400).json({ error: 'Cannot use the username Admin' });
  }

  try {
    const existingUser = await User.findOne({ username });
    if (existingUser) {
      return res.status(400).json({ error: 'Username already exists' });
    }

    const existingEmail = await User.findOne({ email });
    if (existingEmail) {
      return res.status(400).json({ error: 'Email already exists' });
    }

    const newUser = new User({ username, password, email, fullName });
    await newUser.save();
    return res.status(200).json({ message: 'Account created successfully' });
  } catch (error) {
    console.error(error);
    return res.status(500).json({ error: 'Internal Server Error' });
  }
});
app.post('/api/reset-password', async (req, res) => {
  const { email } = req.body;

  try {
    // Implement logic to send a password reset email to the user's email address
    // ...

    // For demonstration purposes, show a success message
    return res.status(200).json({ message: 'Password reset email sent!' });
  } catch (error) {
    console.error(error);
    return res.status(500).json({ error: 'Internal Server Error' });
  }
});
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
