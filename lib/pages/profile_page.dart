import 'package:belajar_drawer/widget/app_drawer.dart';
import 'package:flutter/material.dart';

class ProfilePage extends StatelessWidget {
  const ProfilePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: const AppDrawer(),
      appBar: AppBar(
        title: const Text("Profile"),
      ),
      body: SingleChildScrollView(
        child: Column(
          children: [
            const SizedBox(height: 20),
            const Center(
              child: CircleAvatar(
                radius: 80,
                backgroundImage: AssetImage('assets/profile.jpg'),
              ),
            ),
            const SizedBox(height: 20),
            _buildProfileInfo(
              context,
              icon: Icons.person,
              title: "Name",
              subtitle: "Nab Shafirah",
            ),
            _buildProfileInfo(
              context,
              icon: Icons.info_outline,
              title: "About",
              subtitle: "Flutter Developer",
            ),
            _buildProfileInfo(
              context,
              icon: Icons.phone,
              title: "Phone",
              subtitle: "+62 123 4567 890",
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildProfileInfo(
    BuildContext context, {
    required IconData icon,
    required String title,
    required String subtitle,
  }) {
    return Card(
      margin: const EdgeInsets.symmetric(horizontal: 16, vertical: 8),
      child: ListTile(
        leading: Icon(icon, color: Theme.of(context).primaryColor),
        title: Text(
          title,
          style: const TextStyle(
            fontWeight: FontWeight.bold,
          ),
        ),
        subtitle: Text(subtitle),
      ),
    );
  }
}
