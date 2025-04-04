# WordPress Plugin: Send Post to Telegram Channel

**Version:** 1.0.0  
**Author:** Sadeq Yaqobi  
**License:** GPL-2.0-or-later

## Description

The **Send Post to Telegram Channel** plugin is a custom WordPress plugin that enables automatic sharing of your WordPress posts to a specified Telegram channel. This integration helps in reaching your Telegram audience effortlessly by sending notifications directly to your channel whenever a new post is published.

## Features

- **Automatic Post Sharing:** Automatically sends newly published posts to a designated Telegram channel.
- **Customizable Messages:** Allows customization of the message format sent to the Telegram channel.
- **Easy Integration:** Simple setup process to connect your WordPress site with your Telegram channel using a bot token and channel ID.

## Installation

1. **Download the Plugin:**
   - Clone the repository:
     ```bash
     git clone https://github.com/sadeq-yaqobi/wp-plugin-send-post-to-telegram-channel.git
     ```
   - Or [download the ZIP file](https://github.com/sadeq-yaqobi/wp-plugin-send-post-to-telegram-channel/archive/refs/heads/main.zip) and extract it.

2. **Upload to WordPress:**
   - Upload the extracted plugin folder to the `/wp-content/plugins/` directory of your WordPress installation.

3. **Activate the Plugin:**
   - Log in to your WordPress admin dashboard.
   - Navigate to **Plugins** > **Installed Plugins**.
   - Locate **Send Post to Telegram Channel** and click **Activate**.

## Setup

1. **Create a Telegram Bot:**
   - Open Telegram and search for the **BotFather**.
   - Start a chat with BotFather and use the `/newbot` command to create a new bot.
   - Follow the prompts to set up the bot and obtain the **Bot Token**.

2. **Obtain the Channel ID:**
   - Add your newly created bot as an administrator to your Telegram channel.
   - Send a message in the channel.
   - Use the `https://api.telegram.org/bot<YourBotToken>/getUpdates` API endpoint to retrieve the **Chat ID** of the channel.

3. **Configure the Plugin:**
   - In your WordPress admin dashboard, navigate to **Settings** > **Send Post to Telegram**.
   - Enter your **Bot Token** and **Channel ID** in the respective fields.
   - Customize the message template if desired.
   - Save the settings.

## Usage

- Once configured, the plugin will automatically send a message to the specified Telegram channel whenever a new post is published on your WordPress site.
- The message will include the post title and a link to the post, based on the template you set up in the settings.

## File Structure

- **`_inc/`**: Contains administrative PHP files for handling plugin settings and configurations.
- **`assets/`**: Includes CSS files for styling the plugin's admin interface.
- **`class/`**: Contains PHP classes that manage the core functionalities of the plugin.
- **`view/`**: Holds template files for the plugin's admin settings page.
- **`core.php`**: Core plugin functionalities and initialization.
- **`index.php`**: Initializes the plugin.
