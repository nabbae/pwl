import 'package:belajar_drawer/widget/app_drawer.dart';
import 'package:flutter/material.dart';

class ProfilePage extends StatelessWidget {
  const ProfilePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      drawer: AppDrawer(),
      appBar: AppBar(title: Text("Halaman Profile")),
      body: Center(child: Text("Ini adalah halaman profile")),
    );
  }
}