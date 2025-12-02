import 'package:belajar_drawer/widget/app_drawer.dart';
import 'package:flutter/material.dart';

class SettingsPage extends StatelessWidget {
  const SettingsPage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: const AppDrawer(),
      appBar: AppBar(
        title: const Text("Settings"),
      ),
      body: ListView(
        children: [
          _buildSettingsItem(
            context,
            icon: Icons.account_circle,
            title: "Account",
            subtitle: "Privacy, security, change number",
          ),
          _buildSettingsItem(
            context,
            icon: Icons.chat,
            title: "Chats",
            subtitle: "Theme, wallpapers, chat history",
          ),
          _buildSettingsItem(
            context,
            icon: Icons.notifications,
            title: "Notifications",
            subtitle: "Message, group & call tones",
          ),
          _buildSettingsItem(
            context,
            icon: Icons.data_usage,
            title: "Storage and data",
            subtitle: "Network usage, auto-download",
          ),
          _buildSettingsItem(
            context,
            icon: Icons.help_outline,
            title: "Help",
            subtitle: "Help centre, contact us, privacy policy",
          ),
          const Divider(),
          _buildSettingsItem(
            context,
            icon: Icons.group,
            title: "Invite a friend",
          ),
        ],
      ),
    );
  }

  Widget _buildSettingsItem(
    BuildContext context, {
    required IconData icon,
    required String title,
    String? subtitle,
  }) {
    return ListTile(
      leading: Icon(icon, color: Theme.of(context).primaryColor),
      title: Text(title),
      subtitle: subtitle != null ? Text(subtitle) : null,
      onTap: () {},
    );
  }
}
